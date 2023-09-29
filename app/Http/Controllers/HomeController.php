<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function sendmsg() {
        $msg = 'Bonjour 5TWIN';
        return response($msg);
    }

    //show
    public function show() {
        return view('home', ['message' => 'home page']);
    }
    
}
