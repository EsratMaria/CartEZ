<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain_mail_box extends Model
{
    protected $fillable = [
        'complain_id','from','to','mail_text'
    ];
}
