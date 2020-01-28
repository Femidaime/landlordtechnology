<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('area');
            $table->string('description')->nullable();
            $table->string('mainImage');
            $table->string('state');
            $table->string('lga');
            $table->string('address');
            $table->string('documentsTitle')->nullable();
            $table->string('useOfProperty');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('toilets');
            $table->bigInteger('price');
            $table->string('additionalInfo')->nullable();
            $table->string('currency')->nullable();
            $table->string('duration')->nullable();
            $table->dateTime('startDate')->nullable();
            $table->dateTime('endDate')->nullable();
            $table->boolean('isDocumentUploaded')->default(false);

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->boolean('showProperty')->default(false);
            $table->string('LUIN')->nullable();
            $table->string('CUIN')->nullable();
            $table->boolean('isPropertyVerified')->default(false);

            $table->unsignedInteger('propertyResponse_id');
            $table->foreign('propertyResponse_id')->references('id')->on('property_response');

            $table->unsignedInteger('propertyCategory_id');
            $table->foreign('propertyCategory_id')->references('id')->on('property_categories');
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
        Schema::dropIfExists('properties');
    }
}
