<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobiles_and_tablets_featured_phone_attribute extends Model
{
    protected $table = 'mobiles_and_tablets-featured_phones_attributes';
    protected $fillable = [
        'display_name','filter','attribute'
    ];
}
