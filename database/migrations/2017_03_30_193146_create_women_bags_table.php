<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWomenBagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('women_bags', function (Blueprint $table) {
            $table->string('item_id',100);
            $table->primary('item_id');
            $table->integer('subcategory_id');
            $table->string('title');
            $table->longText('description');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('color');
            $table->date('date');
            $table->string('value_addition');
            $table->string('length');
            $table->string('height');
            $table->string('width');
            $table->string('material');
            $table->string('strap');
            $table->string('strap_length');
            $table->string('strap_material');
            $table->string('type');
            $table->string('pocket');
            $table->string('closure');
            $table->string('lining');
            $table->string('handle');
            $table->string('measurementunit');
            $table->string('occasion');
            $table->string('event');
            $table->string('care');
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
        Schema::drop('women_bags');
    }
}
