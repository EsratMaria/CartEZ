<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cameras_and_accessories_accessory_attribute extends Model
{
    protected $table = 'cameras_and_accessories-accessories_attributes';
    protected $fillable = [
        'display_name','filter','attribute'
    ];
}
