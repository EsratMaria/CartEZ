<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tv_and_electronics_smart_tv_attribute extends Model
{
    protected $table = 'tv_and_electronics-smart_tvs_attributes';
    protected $fillable = [
        'display_name','filter','attribute'
    ];
}
