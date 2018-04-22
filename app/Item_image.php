<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_image extends Model
{
    protected $fillable = [
        'prod_id', 'image_loc'
    ];

}
