<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = [
        'template_folder'
    ];
    public function shops(){

        return $this->hasMany('App\Shop');
    }
}
