<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobiles_and_tablets_accessory extends Model
{
    protected $table = 'mobiles_and_tablets-accessories';
    protected $fillable = [
        'item_id', 'subcategory_id', 'title','description','price','quantity','color','date',
        'brand','SKU','weight','type','warranty','shop_id','img_loc'
    ];
    protected $primaryKey='item_id';
    public $incrementing = false;
    public function item_tags(){

        return $this->hasOne('App\Item_tag','prod_id','item_id');
    }
    public function item_images(){

        return $this->hasMany('App\Item_image','prod_id','item_id');
    }
    public function featured_products(){

        return $this->hasMany('App\Featured_product','prod_id','item_id');
    }
    public function feedbacks(){

        return $this->hasMany('App\Feedback','prod_id','item_id');
    }
    public function shoppingcarts(){

        return $this->hasMany('App\Shoppingcart','prod_id','item_id');
    }
    public function products(){
        return $this->hasOne('App\Product','prod_id','item_id');
    }
}
