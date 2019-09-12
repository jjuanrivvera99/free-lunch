<?php

namespace App\Helpers;

use App\Grocery;
use App\Ingredient;
use GuzzleHttp\Client;
use App\Events\NotifyEvent;

class Market {

    /**
     * Update grocery inventory
     * 
     * @param $response
     * @return void
     */
    public static function updateIngredientQuantity($response, $enough = true){

        //Get ingredient by name
        $ingredient = Ingredient::whereName($response['name'])->first();

        //Get grocery
        $grocery = Grocery::whereIngredientId($ingredient->ingredient_id)->first();

        //Update quantity
        if(($grocery->quantity == 0 && $response['quantitySold'] > 0) || !$enough){
            $grocery->quantity += $response['quantitySold'];
            //Save changes
            $grocery->save();

            event(new NotifyEvent(1, $response['quantitySold']." ".$response["name"]." buyed"));
        }
    }

    /**
     * Buy an ingredient available in the grocery
     * 
     * @param string $ingredient
     * @return json
     */
    public static function buyIngredient($ingredient, $enough = true){
        $client = new Client([
            'base_uri' => 'https://recruitment.alegra.com',
            'timeout'  => 0,
        ]);

        $params = [
            'query' => [
                'ingredient' => $ingredient
            ]
        ];

        $response = $client->get("/api/farmers-market/buy", $params);

        $response = $response->getBody()->getContents();

        $response = json_decode($response,true);

        $response["name"] = $ingredient;

        self::updateIngredientQuantity($response, $enough);

        return $response;
    }

    /**
     * Buy all the ingredients available in the grocery
     * 
     * @return json
     */
    public static function buyAllIngredients(){

        $ingredients = Ingredient::all()->pluck('name');

        foreach ($ingredients as $ingredient) {
            self::buyIngredient($ingredient);
        }
    }

}