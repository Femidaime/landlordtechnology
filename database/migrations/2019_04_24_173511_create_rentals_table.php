<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('propertyCategory_id');
            $table->foreign('propertyCategory_id')->references('id')->on('property_categories');

            $table->foreign('verifiedProperty_id')->references('id')->on('verified_properties');
            $table->unsignedInteger('verifiedProperty_id');
            
            $table->dateTime('startDate');
            $table->dateTime('endDate');

            $table->unsignedInteger('card_id');
            $table->foreign('card_id')->references('id')->on('cards');

            $table->dateTime('paymentDueDate');

            $table->string('status');

            $table->enum('duration', ['DAILY', 'WEEKLY', 'MONTHLY', 'YEARLY'])->nullable();
            $table->enum('rentalType', ['RENT', 'LEASE', 'SALE']);

            $table->string('otherDuration')->nullable();
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
        Schema::dropIfExists('rentals');
    }
}
