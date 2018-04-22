<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChngeTableNameAgain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('men_panjabis_attributes', 'men-panjabis_attributes');
        Schema::rename('men_pajama_attributes','men-pajamas_attributes');
        Schema::rename('men_panjabi_pajama_set_attributes','men-panjabi_pajama_sets_attributes');
        Schema::rename('men_shirt_attributes','men-shirts_attributes');
        Schema::rename('men_watch_attributes','men-watches_attributes');
        Schema::rename('men_wallet_attributes','men-wallets_attributes');
        Schema::rename('men_bag_attributes','men-bags_attributes');
        Schema::rename('men_cufflink_attributes','men-cufflinks_attributes');
        Schema::rename('women_sharee_attributes','women-sharees_attributes');
        Schema::rename('women__shalwar_kameez_attributes','women-shalwar_kameezs_attributes');
        Schema::rename('women_single_piece_attributes','women-single_pieces_attributes');
        Schema::rename('women_dupatta_attributes','women-dupattas_attributes');
        Schema::rename('women_shoes_attributes','women-shoes_attributes');
        Schema::rename('women_bag_attributes','women-bags_attributes');
        Schema::rename('women_watch_attributes','women-watches_attributes');
        Schema::rename('women_purse_attributes','women-purses_attributes');
        Schema::rename('women_necklace_attributes','women-necklaces_attributes');
        Schema::rename('women_earring_attributes','women-earrings_attributes');
        Schema::rename('men_tshirt_attributes','men-t_shirts_attributes');
        Schema::rename('mobiles_and_tablets_smartphone_attributes','mobiles_and_tablets-smartphones_attributes');
        Schema::rename('mobiles_and_tablets_tablet_attributes','mobiles_and_tablets-tablets_attributes');
        Schema::rename('mobiles_and_tablets_featured_phone_attributes','mobiles_and_tablets-featured_phones_attributes');
        Schema::rename('mobiles_and_tablets_accessory_attributes','mobiles_and_tablets-accessories_attributes');
        Schema::rename('men_shoe_attributes','men-shoes_attributes');
        Schema::rename('men_belt_attributes','men-belts_attributes');
        Schema::rename('computing_desktop_attributes','computing-desktops_attributes');
        Schema::rename('computing_laptop_attributes','computing-laptops_attributes');
        Schema::rename('computing_macbook_attributes','computing-macbooks_attributes');
        Schema::rename('computing_accessory_attributes','computing-accessories_attributes');
        Schema::rename('tv_and_electronics_led_tv_attributes','tv_and_electronics-led_tvs_attributes');
        Schema::rename('tv_and_electronics_smart_tv_attributes','tv_and_electronics-smart_tvs_attributes');
        Schema::rename('tv_and_electronics_3d_tv_attributes','tv_and_electronics-3d_tvs_attributes');
        Schema::rename('tv_and_electronics_dvd_player_attributes','tv_and_electronics-dvd_players_attributes');
        Schema::rename('tv_and_electronics_home_theater_attributes','tv_and_electronics-home_theaters_attributes');
        Schema::rename('tv_and_electronics_tv_box_attributes','tv_and_electronics-tv_boxes_attributes');
        Schema::rename('tv_and_electronics_tv_mount_attributes','tv_and_electronics-tv_mounts_attributes');
        Schema::rename('tv_and_electronics_other_attributes','tv_and_electronics-others_attributes');
        Schema::rename('cameras_and_accessories_camera_attributes','cameras_and_accessories-cameras_attributes');
        Schema::rename('cameras_and_accessories_accessory_attributes','cameras_and_accessories-accessories_attributes');
        Schema::rename('appliances_home_appliance_attributes','appliances-home_appliances_attributes');
        Schema::rename('appliances_kitchen_appliance_attributes','appliances-kitchen_appliances_attributes');
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
