<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Men_panjabi_pajama_set_attribute extends Model
{
    protected $table='men-panjabi_pajama_sets_attributes';
    protected $fillable = [
        'display_name','filter','attribute'
    ];
}
