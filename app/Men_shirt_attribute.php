<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Men_shirt_attribute extends Model
{
    protected $table='men-shirts_attributes';
    protected $fillable = [
        'display_name','filter','attribute'
    ];
}
