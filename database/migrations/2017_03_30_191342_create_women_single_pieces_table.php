<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWomenSinglePiecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('women_single_pieces', function (Blueprint $table) {
            $table->string('item_id',100);
            $table->primary('item_id');
            $table->integer('subcategory_id');
            $table->string('title');
            $table->longText('description');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('fabric');
            $table->string('color');
            $table->date('date');
            $table->string('size');
            $table->string('collar_neck');
            $table->string('cut_fit');
            $table->string('sleeve');
            $table->string('length');
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
        Schema::drop('women_single_pieces');
    }
}
