<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'location', 'password','date_of_birth','verifyToken'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
    public function feedbacks(){

        return $this->hasMany('App\Feedback');
    }
    public function delivery_addresses(){

        return $this->hasMany('App\Delivery_address');
    }
    public function shops(){

        return $this->hasMany('App\Shop');
    }
    public function shoppingcarts(){

        return $this->hasMany('App\Shoppingcart');
    }
    public function transactionhistories(){

        return $this->hasMany('App\Transactionhistory');
    }
    public function requests(){

        return $this->hasMany('App\Request');
    }

}
