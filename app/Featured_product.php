<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Featured_product extends Model
{
    protected $fillable = [
        'prod_id','date_from','date_to','shop_id','featured_status'
    ];
}
