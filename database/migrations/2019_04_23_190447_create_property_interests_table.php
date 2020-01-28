<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_interests', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id');
            $table->boolean('isInterestValid')->default(false);

            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('verifiedProperty_id');
            $table->foreign('verifiedProperty_id')->references('id')->on('verified_properties');

            $table->dateTime('startDate');  
            $table->dateTime('endDate');  
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
        Schema::dropIfExists('property_interests');
    }
}
