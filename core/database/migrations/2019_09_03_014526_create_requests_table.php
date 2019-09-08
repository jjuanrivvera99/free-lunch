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
            $table->bigInteger('plate_id')->nullable();
            $table->bigInteger('kitchener_id')->nullable();
            $table->bigInteger('request_state_id')->nullable();
            $table->date('date');
            $table->timestamps();

            $table->foreign('plate_id')->references('plate_id')->on('plate');
            $table->foreign('kitchener_id')->references('kitchener_id')->on('kitchener');
            $table->foreign('request_state_id')->references('request_state_id')->on('request_state');
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
