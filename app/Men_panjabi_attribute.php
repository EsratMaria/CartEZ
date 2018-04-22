<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Men_panjabi_attribute extends Model
{
    protected $table='men-panjabis_attributes';
    protected $fillable = [
       'display_name','filter','attribute'
    ];
}
