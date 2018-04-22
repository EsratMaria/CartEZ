<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilesAndTabletsTabletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobiles_and_tablets_tablets', function (Blueprint $table) {
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
            $table->string('SKU');
            $table->string('weight');
            $table->string('manufacture');
            $table->string('warranty');
            $table->string('display');
            $table->string('front_cam')->nullable();
            $table->string('back_cam')->nullable();
            $table->string('system_storage');
            $table->string('ram')->nullable();
            $table->string('sim_card');
            $table->string('processor');
            $table->string('cpu_speed');
            $table->string('battery_mah');
            $table->string('connectivity')->nullable();
            $table->string('model');
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
        Schema::drop('mobiles_and_tablets_tablets');
    }
}
