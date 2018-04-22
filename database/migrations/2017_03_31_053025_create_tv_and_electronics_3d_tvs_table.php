<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTvAndElectronics3dTvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_and_electronics_3d_tvs', function (Blueprint $table) {
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
            $table->string('sku');
            $table->string('weight');
            $table->string('display');
            $table->string('features');
            $table->string('connectivity');
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
        Schema::drop('tv_and_electronics_3d_tvs');
    }
}
