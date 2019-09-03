<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->bigIncrements('request_id');
            $table->bigInteger('plate_id');
            $table->bigInteger('kitchener_id')->nullable();
            $table->date('date');
            $table->timestamps();

            $table->foreign('plate_id')->references('plate_id')->on('plate');
            $table->foreign('kitchener_id')->references('kitchener_id')->on('kitchener');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request');
    }
}
