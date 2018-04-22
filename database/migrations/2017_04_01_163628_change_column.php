<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('men_panjabis', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('men_pajamas', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('men_panjabi_pajama_sets', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('men_shirts', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('men_shoes', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('men_belts', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('men_watches', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('men_wallets', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('men_bags', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('men_cufflinks', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('women_sharees', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('women_shalwar_kameezs', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('women_single_pieces', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('women_dupattas', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('women_shoes', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('women_bags', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('women_watches', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('women_purses', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('women_necklaces', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('women_earrings', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('men_t_shirts', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('mobiles_and_tablets_smartphones', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('mobiles_and_tablets_tablets', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('mobiles_and_tablets_featured_phones', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('mobiles_and_tablets_accessories', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('computing_desktops', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('computing_laptops', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('computing_macbooks', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('computing_accessories', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('tv_and_electronics_led_tvs', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('tv_and_electronics_smart_tvs', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('tv_and_electronics_3d_tvs', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('tv_and_electronics_dvd_players', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('tv_and_electronics_home_theaters', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('tv_and_electronics_tv_boxes', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('tv_and_electronics_tv_mounts', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('tv_and_electronics_others', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('cameras_and_accessories_cameras', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('cameras_and_accessories_accessories', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('appliances_home_appliances', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('appliances_kitchen_appliances', function($table)
        {
            $table->integer('shop_id')->unsigned()->change();
        });
        Schema::table('shops', function($table)
        {
            $table->increments('id')->change();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('men_panjabis', function (Blueprint $table) {
            //
        });
    }
}
