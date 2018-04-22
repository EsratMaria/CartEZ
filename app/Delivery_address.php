<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery_address extends Model
{
    protected $fillable = [
        'user_id', 'address'
    ];
}
