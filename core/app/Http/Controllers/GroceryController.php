<?php

namespace App\Http\Controllers;

use SEO;
use URL;
use Auth;
use Market;
use App\Grocery;
use App\Ingredient;
use App\Events\NotifyEvent;
use Illuminate\Http\Request;
use App\Jobs\BuyIngredientsJob;
use App\Request as RequestModel;

class GroceryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEO::opengraph()->setUrl(URL::current());

        $menu = 'grocery';

        return view('grocery', compact('menu'));
    }

    public function datatable(){
        $response = [];

        $response["data"] = Ingredient::join('grocery', 'grocery.ingredient_id','=', 'ingredient.ingredient_id')
                                    ->select('ingredient.ingredient_id as ingredient_id', 'ingredient.name as name', 'ingredient.description as description','grocery.quantity as quantity')
                                    ->orderBy('ingredient.ingredient_id')
                                    ->get();

        return $response;
    }

    public function buyIngredients(Request $request){

        $name = ($request->ingredient_name) ? $request->ingredient_name : 'all';

        BuyIngredientsJob::dispatch($name);
    }

    public function deliverRequestIngredients(Request $request){
        $user              = Auth::user();
        $request_id        = $request->request_id;
        $request_state_id  = $request->request_state_id;
        $requestModel      = RequestModel::findOrFail($request_id);

        if(!$user->isRole('grocery') && !$user->isRole('admin')){
            return abort(400, 'You are not from grocery');
        }

        if($requestModel->request_state_id != 3){
            return abort(400, 'The order is not waiting for ingredients');
        }

        $ingredients = $this->getRequestIngredients($request_id);

        foreach($ingredients as $ingredient){
            $grocery = Grocery::whereIngredientId($ingredient->ingredient_id)->first();

            
            if($grocery->quantity < $ingredient->qty){
                return abort(400, 'There is not enough '.$ingredient->name);
            }
            
            $grocery->quantity -= $ingredient->qty;
            $grocery->save();
        }

        $requestModel->update([
            'request_state_id' => $request_state_id,
        ]);

        event(new NotifyEvent($user->id, "The order $request_id is ready to prepare"));
    }

    public function buyRequestIngredients(Request $request){
        $request_id        = $request->request_id;
        $requestModel      = RequestModel::findOrFail($request_id);

        if(!\Shinobi::can('request.buy')){
            return abort(403);
        }

        $ingredients = $this->getRequestIngredients($request_id);

        foreach($ingredients as $ingredient){
            Market::buyIngredient($ingredient->name);
        }
    }

    public function getRequestIngredients($request){
        
        return Ingredient::join('plate_ingredient', 'plate_ingredient.ingredient_id', '=', 'ingredient.ingredient_id')
                            ->join('plate', 'plate.plate_id', '=', 'plate_ingredient.plate_id')
                            ->join('request', 'request.plate_id', '=', 'plate.plate_id')
                            ->select('ingredient.*', 'plate_ingredient.qty')
                            ->where('request.request_id', $request)
                            ->get();
    }

}
