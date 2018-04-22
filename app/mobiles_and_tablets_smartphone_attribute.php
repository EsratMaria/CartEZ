<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobiles_and_tablets_smartphone_attribute extends Model
{
    protected $table='mobiles_and_tablets-smartphones_attributes';
    protected $fillable = [
        'display_name','filter','attribute'
    ];
}
