<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverDetailsTable extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('address');
            $table->string('state');
            $table->integer('postalCode');
            $table->string('country');
            $table->string('city');
            $table->string('vehicleType');
            $table->string('vehicleModel');
            $table->string('vehicleNo');
            $table->string('vehicleMaker');
            $table->string('yearOfModel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_details');
    }
}
