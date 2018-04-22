<?php
/**
 * Created by PhpStorm.
 * User: Ishrat
 * Date: 11/26/2017
 * Time: 1:28 AM
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'id', 'user_id', 'message'
    ];

}