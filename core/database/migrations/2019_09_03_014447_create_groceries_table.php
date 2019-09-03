<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroceriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grocery', function (Blueprint $table) {
            $table->bigIncrements('grocery_id');
            $table->bigInteger('ingredient_id');
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('ingredient_id')->references('ingredient_id')->on('ingredient');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grocery');
    }
}
