<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cameras_and_accessories_camera_attribute extends Model
{
    protected $table = 'cameras_and_accessories-cameras_attributes';
    protected $fillable = [
        'display_name','filter','attribute'
    ];
}
