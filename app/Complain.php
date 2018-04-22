<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $table='complains';
    protected $fillable = [
        'user_id', 'transactionhistory_id','prod_id','date_of_complain','detail_text','complain_status'
    ];
    public function complain_mail_boxes(){

        return $this->hasMany('App\Complain_mail_box');
    }
    public function users(){
        return $this->belongsTo('App\User');
    }
}
