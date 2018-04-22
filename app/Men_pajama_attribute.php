<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Men_pajama_attribute extends Model
{
    protected $table='men-pajamas_attributes';
    protected $fillable = [
        'display_name','filter','attribute'
    ];
}
