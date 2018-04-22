<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionhistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactionhistories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shoppingcart_id')->unsigned();
            $table->integer('paymenttype_id')->unsigned();
            $table->integer('user_id');
            $table->date('purchase_date');
            $table->time('purchase_time');
            $table->string('payment_status');
            $table->string('delivery_status');
            $table->string('bkash_payment_id');
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
        Schema::drop('transactionhistories');
    }
}
