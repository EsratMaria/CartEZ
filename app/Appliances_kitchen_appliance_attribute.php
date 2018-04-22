<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appliances_kitchen_appliance_attribute extends Model
{
    protected $table='appliances-kitchen_appliances_attributes';
    protected $fillable = [
        'display_name','filter','attribute'
    ];
}
