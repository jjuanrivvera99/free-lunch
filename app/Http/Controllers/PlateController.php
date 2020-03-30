<?php

namespace App\Http\Controllers;

use SEO;
use URL;
use App\Plate;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        SEO::opengraph()->setUrl(URL::current());

        $menu = 'plates';

        return view('plates', compact('menu'));
    }

    public function datatable()
    {
        $response = [];

        $response["data"] = Plate::select('plate_id', 'name', 'description')
                                ->orderBy('plate_id')
                                ->get();

        return $response;
    }

    public function getIngredients(Request $request)
    {
        $plate_id = $request->plate_id;

        $ingredients = $this->getPlateIngredients($plate_id);

        $response = "";

        foreach ($ingredients as $key => $ingredient) {
            $index = $key + 1;

            $response .= "<tr><th scope=\"row\">" . $index . "</th>
                        <td>" . $ingredient->name . "</td>
                        <td>" . $ingredient->qty . "</td></tr>";
        }

        return $response;
    }

    /**
     * Get ingredients for the plate
     *
     * @param number $plate_id
     * @return Plate
     */
    public function getPlateIngredients($plate_id)
    {
        return Plate::where('plates.plate_id', $plate_id)
                    ->join('plate_ingredient', 'plates.plate_id', '=', 'plate_ingredient.plate_id')
                    ->join('ingredients', 'plate_ingredient.ingredient_id', '=', 'ingredients.ingredient_id')
                    ->select('ingredients.ingredient_id', 'ingredients.name', 'plate_ingredient.qty')->get();
    }
}
