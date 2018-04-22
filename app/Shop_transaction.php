<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop_transaction extends Model
{
    protected $fillable = [
        'transactionhistory_id', 'shop_id', 'prod_id','quantity','order_date','delivery_date','shop_transaction_status'
    ];
}
