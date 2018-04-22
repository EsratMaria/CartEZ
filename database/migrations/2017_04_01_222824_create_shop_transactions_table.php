<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transactionhistory_id')->unsigned();
            $table->integer('shop_id')->unsigned();
            $table->string('prod_id',100);
            $table->integer('quantity');
            $table->date('order_date');
            $table->date('delivery_date');
            $table->text('shop_transaction_status');
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
        Schema::drop('shop_transactions');
    }
}
