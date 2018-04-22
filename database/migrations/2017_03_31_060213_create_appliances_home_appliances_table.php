<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppliancesHomeAppliancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appliances_home_appliances', function (Blueprint $table) {
            $table->string('item_id',100);
            $table->primary('item_id');
            $table->integer('subcategory_id');
            $table->string('title');
            $table->longText('description');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('color');
            $table->date('date');
            $table->string('sku');
            $table->string('weight');
            $table->string('brand');
            $table->string('manufacture');
            $table->string('warranty');
            $table->string('size');
            $table->string('type');
            $table->string('img_loc');
            $table->integer('shop_id')->unsigned();
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
        Schema::drop('appliances_home_appliances');
    }
}
