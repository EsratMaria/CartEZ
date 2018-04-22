<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Women_sharee_attribute extends Model
{
    protected $table='women-sharees_attributes';
    protected $fillable = [
        'display_name','filter','attribute'
    ];
}
