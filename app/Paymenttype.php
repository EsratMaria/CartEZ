<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paymenttype extends Model
{
    protected $fillable = [
        'title'
    ];
    public function transactionhistories(){

        return $this->hasMany('App\Transactionhistory');
    }
}
