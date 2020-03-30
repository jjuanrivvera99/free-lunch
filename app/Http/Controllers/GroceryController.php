<?php

namespace App\Http\Controllers;

use SEO;
use URL;
use Auth;
use Market;
use App\Grocery;
use App\Ingredient;
use Illuminate\View\View;
use App\Events\NotifyEvent;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Jobs\BuyIngredientsJob;
use App\Request as RequestModel;
use Illuminate\Contracts\View\Factory;

class GroceryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        SEO::opengraph()->setUrl(URL::current());

        $menu = 'grocery';

        return view('grocery', compact('menu'));
    }

    public function datatable()
    {
        $response = [];

        $response["data"] = Ingredient::join('grocery', 'grocery.ingredient_id', '=', 'ingredients.ingredient_id')
                                    ->select(
                                        'ingredients.ingredient_id as ingredient_id',
                                        'ingredients.name as name',
                                        'ingredients.description as description',
                                        'grocery.quantity as quantity'
                                    )->orderBy('ingredients.ingredient_id')
                                    ->get();

        return $response;
    }

    public function buyIngredients(Request $request)
    {

        $name = ($request->ingredient_name) ? $request->ingredient_name : 'all';

        BuyIngredientsJob::dispatch($name);
    }


    /**
     * Deliver ingredients for order
     *
     * @param Request $request
     * @return void
     */
    public function deliverRequestIngredients(Request $request)
    {
        $user              = Auth::user();
        $request_id        = $request->request_id;
        $request_state_id  = $request->request_state_id;
        $requestModel      = RequestModel::findOrFail($request_id);

        if (!$user->isRole('grocery') && !$user->isRole('admin')) {
            return abort(400, 'You are not from grocery');
        }

        if ($requestModel->request_state_id != 3) {
            return abort(400, 'The order is not waiting for ingredients');
        }

        $ingredients = $this->getRequestIngredients($request_id);

        foreach ($ingredients as $ingredient) {
            $grocery = Grocery::whereIngredientId($ingredient->ingredient_id)->first();


            if ($grocery->quantity < $ingredient->qty) {
                return abort(400, 'There is not enough ' . $ingredient->name);
            }

            $grocery->quantity -= $ingredient->qty;
            $grocery->save();
        }

        $requestModel->update([
            'request_state_id' => $request_state_id,
        ]);

        event(new NotifyEvent($user->id, "The order $request_id is ready to prepare"));
    }

    public function buyRequestIngredients(Request $request)
    {
        $request_id        = $request->request_id;
        $requestModel      = RequestModel::findOrFail($request_id);

        if (!\Shinobi::can('requests.buy')) {
            return abort(403);
        }

        $ingredients = $this->getRequestIngredients($request_id);

        if ($ingredients->count() == 0) {
            return abort(400, 'There is no ingredients to buy');
        }

        foreach ($ingredients as $ingredient) {
            echo $ingredient->name;
            Market::buyIngredient($ingredient->name);
        }
    }

    public function getRequestIngredients($request)
    {

        return Ingredient::join('plate_ingredient', 'plate_ingredient.ingredient_id', '=', 'ingredients.ingredient_id')
                            ->join('plates', 'plates.plate_id', '=', 'plate_ingredient.plate_id')
                            ->join('requests', 'requests.plate_id', '=', 'plates.plate_id')
                            ->select('ingredients.*', 'plate_ingredient.qty')
                            ->where('requests.request_id', $request)
                            ->get();
    }

}
