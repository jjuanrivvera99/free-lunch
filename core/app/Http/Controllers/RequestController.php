<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request as RequestModel;
use Carbon\Carbon;
use Auth;
use App\User;
use App\Plate;
use App\Kitchener;
use App\Events\NotifyEvent;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = [];

        $requestModel = RequestModel::with(['user', 'kitchener','plate'])->get();

        $count = 0;

        foreach ($requestModel as $value) {
            $requests[$count]['RequestID']    = $value->request_id;
            $requests[$count]['User']         = $value->user->name;
            $requests[$count]['Kitchener']    = $this->validateKitchener($value->kitchener);
            $requests[$count]['Plate']        = $this->validatePlate($value->plate);
            $requests[$count]['Date']         = $value->date;
            $requests[$count]['Status']       = $value->request_state_id;
            $count++;
        }

        return response()->json(["data" => $requests]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quantity = ($request->quantity) ? $request->quantity : 1;

        $user = Auth::user();
        $date = Carbon::now();

        for ($i=0; $i < $quantity; $i++) { 
            $requestModel = RequestModel::create([
                'user_id'           => $user->id,
                'request_state_id'  => 1,
                'date'              => $date,
            ]);
        }

        event(new NotifyEvent($user->id, $user->name." has requested ".$quantity." plate(s)"));
        
        return $requestModel;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    public function assign(Request $request){

        $user = Auth::user();

        $request_id = $request->request_id;
        $request_state_id = $request->request_state_id;

        $kitchener = $user->kitchener;

        $plate = Plate::inRandomOrder()->first();

        $requestModel = RequestModel::find($request_id);

        if($kitchener->busy){
            return abort(400, 'The kitchener is busy');
        }

        if($requestModel->kitchener_id){
            return abort(400, 'The order is already assigned');
        }

        $requestModel->update([
            'request_state_id' => $request_state_id,
            'kitchener_id' => $kitchener->kitchener_id,
            'plate_id' => $plate->plate_id,
        ]);

        event(new NotifyEvent($user->id, "The order ".$request_id." was assigned to ".$user->name));
    }

    public function validatePlate($plate){
        $plate_name = 'Unassigned';

        if($plate){
            $plate = Plate::find($plate->plate_id);
            $plate_name = $plate->name;
        }

        return $plate_name;
    }

    public function validateKitchener($kitchener){
        $kitchener_name = 'Unassigned';

        if($kitchener){
            $kitchener = User::find($kitchener->user_id);
            $kitchener_name = $kitchener->name;
        }

        return $kitchener_name;
    }
}
