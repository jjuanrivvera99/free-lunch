<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plate', function (Blueprint $table) {
            $table->bigIncrements('plate_id');
            $table->bigInteger('plate_state_id');
            $table->string('name', 100);
            $table->string('description', 200);
            $table->timestamps();

            $table->foreign('plate_state_id')->references('plate_state_id')->on('plate_state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plate');
    }
}
