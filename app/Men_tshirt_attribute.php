<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Men_tshirt_attribute extends Model
{
    protected $table="men-t_shirts_attributes";
    protected $fillable = [
        'display_name','filter','attribute'
    ];
}
