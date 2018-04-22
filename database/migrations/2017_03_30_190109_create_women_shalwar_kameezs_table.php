<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWomenShalwarKameezsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('women_shalwar_kameezs', function (Blueprint $table) {
            $table->string('item_id',100);
            $table->primary('item_id');
            $table->integer('subcategory_id');
            $table->string('title');
            $table->longText('description');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('fabric');
            $table->string('color');
            $table->string('size');
            $table->date('date');
            $table->string('dupatta_color');
            $table->string('bottom_color');
            $table->string('value_addition');
            $table->string('dupatta_value_addition');
            $table->string('bottom_value_addition');
            $table->string('dupatta_fabric');
            $table->string('bottom_fabric');
            $table->string('sleeve');
            $table->string('length');
            $table->string('waist');
            $table->string('lining');
            $table->string('occasion');
            $table->string('event');
            $table->text('care');
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
        Schema::drop('women_shalwar_kameezs');
    }
}
