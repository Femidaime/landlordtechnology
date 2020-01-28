<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturedPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_property', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('verifiedProperty_id')->nullable();
            $table->foreign('verifiedProperty_id')->references('id')->on('verified_properties');
            $table->boolean('iActive')->default(false);
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
        Schema::dropIfExists('featured_property');
    }
}
