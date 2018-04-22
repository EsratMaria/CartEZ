<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computing_macbook_attribute extends Model
{
    protected $table = 'computing-desktops_attributes';
    protected $fillable = [
        'display_name','filter','attribute'
    ];
}
