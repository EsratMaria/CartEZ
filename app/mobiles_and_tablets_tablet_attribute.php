<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobiles_and_tablets_tablet_attribute extends Model
{
    protected $table = 'mobiles_and_tablets-tablets_attributes';
    protected $fillable = [
        'display_name','filter','attribute'
    ];
}
