<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'title', 'category_id', 'short_name'
    ];


    public function men_panjabis(){

        return $this->hasMany('App\Men_panjabi');
    }
    public function men_pajamas(){

        return $this->hasMany('App\Men_pajama');
    }
    public function men_panjabi_pajama_sets(){

        return $this->hasMany('App\Men_panjabi_pajama_set');
    }
    public function men_shirts(){

        return $this->hasMany('App\Men_shirt');
    }
    public function men_shoes(){

        return $this->hasMany('App\Men_shoe');
    }
    public function men_belts(){

        return $this->hasMany('App\Men_belt');
    }
    public function men_watches(){

        return $this->hasMany('App\Men_watch');
    }
    public function men_wallets(){

        return $this->hasMany('App\Men_wallet');
    }
    public function men_bags(){

        return $this->hasMany('App\Men_bag');
    }
    public function men_cufflinks(){

        return $this->hasMany('App\Men_cufflink');
    }
    public function women_sharees(){

        return $this->hasMany('App\Women_sharee');
    }
    public function women_shalwar_kameezs(){

        return $this->hasMany('App\Women_shalwar_kameez');
    }
    public function women_single_pieces(){

        return $this->hasMany('App\Women_single_piece');
    }
    public function women_dupattas(){

        return $this->hasMany('App\Women_dupatta');
    }
    public function women_shoes(){

        return $this->hasMany('App\Women_shoe');
    }
    public function women_bags(){

        return $this->hasMany('App\Women_bag');
    }
    public function women_watches(){

        return $this->hasMany('App\Women_watch');
    }
    public function women_purses(){

        return $this->hasMany('App\Women_purse');
    }
    public function women_necklaces(){

        return $this->hasMany('App\Women_necklace');
    }
    public function women_earrings(){

        return $this->hasMany('App\Women_earring');
    }
    public function men_t_shirts(){

        return $this->hasMany('App\Men_t_shirt');
    }
    public function mobiles_and_tablets_smartphones(){

        return $this->hasMany('App\Mobiles_and_tablets_smartphone');
    }
    public function mobiles_and_tablets_tablets(){

        return $this->hasMany('App\Mobiles_and_tablets_tablet');
    }
    public function mobiles_and_tablets_featured_phones(){

        return $this->hasMany('App\Mobiles_and_tablets_featured_phone');
    }
    public function mobiles_and_tablets_accessories(){

        return $this->hasMany('App\Mobiles_and_tablets_accessory');
    }
    public function computing_desktops(){

        return $this->hasMany('App\Computing_desktop');
    }
    public function computing_laptops(){

        return $this->hasMany('App\Computing_laptop');
    }
    public function computing_macbooks(){

        return $this->hasMany('App\Computing_macbook');
    }
    public function computing_accessories(){

        return $this->hasMany('App\Computing_accessory');
    }
    public function tv_and_electronics_led_tvs(){

        return $this->hasMany('App\Tv_and_electronics_led_tv');
    }
    public function tv_and_electronics_smart_tvs(){

        return $this->hasMany('App\Tv_and_electronics_smart_tv');
    }
    public function tv_and_electronics_3d_tvs(){

        return $this->hasMany('App\Tv_and_electronics_3d_tv');
    }
    public function tv_and_electronics_dvd_players(){

        return $this->hasMany('App\Tv_and_electronics_dvd_player');
    }
    public function tv_and_electronics_home_theaters(){

        return $this->hasMany('App\Tv_and_electronics_home_theater');
    }

    public function tv_and_electronics_tv_boxes(){

        return $this->hasMany('App\Tv_and_electronics_tv_box');
    }
    public function tv_and_electronics_tv_mounts(){

        return $this->hasMany('App\Tv_and_electronics_tv_mount');
    }
    public function tv_and_electronics_others(){

        return $this->hasMany('App\Tv_and_electronics_other');
    }
    public function cameras_and_accessories_cameras(){

        return $this->hasMany('App\Cameras_and_accessories_camera');
    }
    public function cameras_and_accessories_accessories(){

        return $this->hasMany('App\Cameras_and_accessories_accessory');
    }
    public function appliances_home_appliances(){

        return $this->hasMany('App\Appliances_home_appliance');
    }
    public function appliances_kitchen_appliances(){

        return $this->hasMany('App\Appliances_kitchen_appliance');
    }
//    public function tags(){
//
//        return $this->hasManyThrough('App\tag','App\men_panjabis','subcategory_id','prod_id');
//    }
}
