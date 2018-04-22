<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{

    protected $table = 'feedbacks';
    protected $fillable = [
        'prod_id','feedback_text','rating_point','user_id'
    ];
    public function feedbacks(){

        return $this->belongsTo('App\Men_panjabi');
    }



}
