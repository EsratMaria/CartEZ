<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputingDesktopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computing_desktops', function (Blueprint $table) {
            $table->string('item_id',100);
            $table->primary('item_id');
            $table->integer('subcategory_id');
            $table->string('title');
            $table->longText('description');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('color');
            $table->date('date');
            $table->string('brand');
            $table->string('processor');
            $table->string('memory');
            $table->string('hard_disk');
            $table->string('mother_board');
            $table->string('monitor');
            $table->string('graphics_card');
            $table->string('sku');
            $table->string('cpu');
            $table->string('display');
            $table->string('dimension');
            $table->string('ram');
            $table->string('lan');
            $table->string('audio');
            $table->string('mouse');
            $table->string('keyboard');
            $table->string('warranty');
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
        Schema::drop('computing_desktops');
    }
}
