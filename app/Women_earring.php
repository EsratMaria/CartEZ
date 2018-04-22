<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Women_earring extends Model
{
    protected $table = 'women-earrings';
    protected $fillable = [
        'item_id', 'subcategory_id', 'title','description','price','quantity','color','date','material','style',
        'stone_beads','stone_cut','back_type','weight','value_addition','length','diameter','measurementunit',
        'care','occasion','type','shop_id','img_loc'
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
