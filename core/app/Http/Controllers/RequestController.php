<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Plate;
use Carbon\Carbon;
use App\Kitchener;
use App\Ingredient;
use App\Events\NotifyEvent;
use Illuminate\Http\Request;
use App\Request as RequestModel;
use App\Jobs\RequestIngredientsJob;

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
            $requests[$count]['request_id']    = $value->request_id;
            $requests[$count]['user']         = $value->user->name;
            $requests[$count]['kitchener']    = $this->validateKitchener($value->kitchener);
            $requests[$count]['plate']        = $this->validatePlate($value->plate);
            $requests[$count]['date']         = $value->date;
            $requests[$count]['status']       = $value->request_state_id;
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
        $user = Auth::user();

        RequestIngredientsJob::dispatch($user, $request->quantity);

        return response()->json([]);
    }

    /**
     * Assign request to user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function assign(Request $request){

        $user               = Auth::user();
        $request_id         = $request->request_id;
        $request_state_id   = $request->request_state_id;
        $kitchener          = $user->kitchener;
        $plate              = Plate::inRandomOrder()->first();
        $requestModel       = RequestModel::findOrFail($request_id);

        if(!$kitchener){
            return abort(400, 'You are not a kitchener');
        }

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


    /**
     * Request order's ingredients to grocery
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function requestIngredients(Request $request)
    {
        $user               = Auth::user();
        $kitchener          = $user->kitchener;
        $request_state_id   = $request->request_state_id;
        $request_id         = $request->request_id;
        $requestModel       = RequestModel::findOrFail($request_id);

        if(!$kitchener){
            return abort(400, 'You are not a kitchener');
        }

        if($requestModel->kitchener_id != $kitchener->kitchener_id){
            return abort(400, 'The order is not assigned to you');
        }

        if($requestModel->request_state_id != 2){
            return abort(400, 'The order need to be on assigned state');
        }

        $requestModel->update([
            'request_state_id' => $request->request_state_id
        ]);

        event(new NotifyEvent($user->id, null));
    }

    /**
     * Prepare the order
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function preparePlate(Request $request)
    {
        $user               = Auth::user();
        $kitchener          = $user->kitchener;
        $request_state_id   = $request->request_state_id;
        $request_id         = $request->request_id;
        $requestModel       = RequestModel::findOrFail($request_id);

        if(!$kitchener){
            return abort(400, 'You are not a kitchener');
        }

        if($requestModel->kitchener_id != $kitchener->kitchener_id){
            return abort(400, 'The order is not assigned to you');
        }

        if($requestModel->request_state_id != 4){
            return abort(400, 'The order need to be ready');
        }

        $requestModel->update([
            'request_state_id' => $request->request_state_id
        ]);

        event(new NotifyEvent($user->id, "Order $request_id complete"));
    }

    public function validatePlate($plate){
        $plate_name = 'Unassigned';

        if($plate){
            $plate = Plate::findOrFail($plate->plate_id);
            $plate_name = $plate->name;
        }

        return $plate_name;
    }

    public function validateKitchener($kitchener){
        $kitchener_name = 'Unassigned';

        if($kitchener){
            $kitchener = User::findOrFail($kitchener->user_id);
            $kitchener_name = $kitchener->name;
        }

        return $kitchener_name;
    }
}
