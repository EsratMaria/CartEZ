<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_return extends Model
{
    protected $fillable = [
        'transactionhistory_id','prod_id','return_status','detailtext'
    ];
}
