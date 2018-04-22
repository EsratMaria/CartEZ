<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWomenEarringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('women_earrings', function (Blueprint $table) {
            $table->string('item_id',100);
            $table->primary('item_id');
            $table->integer('subcategory_id');
            $table->string('title');
            $table->longText('description');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('color');
            $table->date('date');
            $table->string('style');
            $table->string('material');
            $table->string('stone_beads');
            $table->string('stone_cut');
            $table->string('back_type');
            $table->text('value_addition');
            $table->string('length');
            $table->string('diameter');
            $table->text('care');
            $table->string('occasion');
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
        Schema::drop('women_earrings');
    }
}
