<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tv_and_electronics_led_tv_attribute extends Model
{
    protected $table = 'tv_and_electronics-led_tvs_attributes';
    protected $fillable = [
        'display_name','filter','attribute'
    ];
}
