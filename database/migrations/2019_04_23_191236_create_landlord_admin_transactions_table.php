<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandlordAdminTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landlord_admin_transactions', function (Blueprint $table) {
            $table->increments('id');
          //  $table->boolean('isInterestValid')->default(true);
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('transactionFor')->nullable();
            $table->integer('amount');
            $table->unsignedInteger('transactionType_id');
            $table->foreign('transactionType_id')->references('id')->on('transaction_types');
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
        Schema::dropIfExists('landlord_admin_transactions');
    }
}
