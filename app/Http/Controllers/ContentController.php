<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{

    function newsmessages(){
        return view('content.news-messages');
    }

    function menus(){
        return view('content.menus');
    }
    function pages(){
        return view('content.pages');
    }
}
