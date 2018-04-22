<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appliances_home_appliance_attribute extends Model
{
    protected $table='appliances-home_appliances_attributes';
    protected $fillable = [
        'display_name','filter','attribute'
    ];
}
