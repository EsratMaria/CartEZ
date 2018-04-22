<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopAccountingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_accountings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transactionhistory_id')->unsigned();
            $table->integer('shop_id')->unsigned();
            $table->integer('amount');
            $table->date('sent_date');
            $table->time('sent_time');
            $table->string('reference_no');
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
        Schema::drop('shop_accountings');
    }
}
