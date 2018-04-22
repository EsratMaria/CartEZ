<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactionhistory extends Model
{
    protected $fillable = [
        'shoppingcart_id','paymenttype_id','user_id','purchase_date','purchase_time','payment_status','delivery_status','cart',
        'bkash_payment_id','price','delivery_address'
    ];
    public function shop_accountings(){

        return $this->hasMany('App\Shop_accounting');
    }
    public function product_returns(){

        return $this->hasMany('App\product_return');
    }
    public function complains(){

        return $this->hasMany('App\Complain');
    }
    public function shop_transactions(){

        return $this->hasMany('App\Shop_transaction');
    }
    public function users(){

        return $this->belongsTo('App\User');
    }
}
