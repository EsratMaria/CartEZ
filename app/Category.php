<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'cat_name', 'cat_desc', 'short_name','cat_image'
    ];

    public function subcategories(){

        return $this->hasMany('App\Subcategory');
    }

}

