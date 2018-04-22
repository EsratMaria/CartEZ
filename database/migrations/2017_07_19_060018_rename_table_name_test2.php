<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameTableNameTest2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('men_pajamas', 'men-pajamas');
        Schema::rename('men_panjabi_pajama_sets', 'men-panjabi_pajama_sets');
        Schema::rename('men_shirts', 'men-shirts');
        Schema::rename('men_watches', 'men-watches');
        Schema::rename('men_wallets', 'men-wallets');
        Schema::rename('men_bags', 'men-bags');
        Schema::rename('men_cufflinks', 'men-cufflinks');
        Schema::rename('women_sharees', 'women-sharees');
        Schema::rename('women_shalwar_kameezs', 'women-shalwar_kameezs');
        Schema::rename('women_single_pieces', 'women-single_pieces');
        Schema::rename('women_dupattas', 'women-dupattas');
        Schema::rename('women_shoes', 'women-shoes');
        Schema::rename('women_bags', 'women-bags');
        Schema::rename('women_watches', 'women-watches');
        Schema::rename('women_purses', 'women-purses');
        Schema::rename('women_necklaces', 'women-necklaces');
        Schema::rename('women_earrings', 'women-earrings');
        Schema::rename('men_t_shirts', 'men-t_shirts');
        Schema::rename('mobiles_and_tablets_smartphones', 'mobiles_and_tablets-smartphones');
        Schema::rename('mobiles_and_tablets_tablets', 'mobiles_and_tablets-tablets');
        Schema::rename('mobiles_and_tablets_featured_phones', 'mobiles_and_tablets-featured_phones');
        Schema::rename('mobiles_and_tablets_accessories', 'mobiles_and_tablets-accessories');
        Schema::rename('men_shoes', 'men-shoes');
        Schema::rename('men_belts', 'men-belts');
        Schema::rename('computing_desktops', 'computing-desktops');
        Schema::rename('computing_laptops', 'computing-laptops');
        Schema::rename('computing_macbooks', 'computing-macbooks');
        Schema::rename('computing_accessories', 'computing-accessories');
        Schema::rename('tv_and_electronics_led_tvs', 'tv_and_electronics-led_tvs');
        Schema::rename('tv_and_electronics_smart_tvs', 'tv_and_electronics-smart_tvs');
        Schema::rename('tv_and_electronics_3d_tvs', 'tv_and_electronics-3d_tvs');
        Schema::rename('tv_and_electronics_dvd_players', 'tv_and_electronics-dvd_players');
        Schema::rename('tv_and_electronics_home_theaters', 'tv_and_electronics-home_theaters');
        Schema::rename('tv_and_electronics_tv_boxes', 'tv_and_electronics-tv_boxes');
        Schema::rename('tv_and_electronics_tv_mounts', 'tv_and_electronics-tv_mounts');
        Schema::rename('tv_and_electronics_others', 'tv_and_electronics-others');
        Schema::rename('cameras_and_accessories_cameras', 'cameras_and_accessories-cameras');
        Schema::rename('cameras_and_accessories_accessories', 'cameras_and_accessories-accessories');
        Schema::rename('appliances_home_appliances', 'appliances-home_appliances');
        Schema::rename('appliances_kitchen_appliances', 'appliances-kitchen_appliances');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
