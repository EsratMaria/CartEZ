<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_tag extends Model
{
    protected $fillable = [
        'prod_id', 'table_name', 'tag_text'
    ];
}
