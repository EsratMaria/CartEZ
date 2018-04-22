<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop_accounting extends Model
{
    protected $fillable = [
        'transactionhistory_id','shop_id','amount','sent_date','sent_time','reference_no'
    ];
}
