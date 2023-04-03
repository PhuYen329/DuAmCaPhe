<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Usercontroller 
{
    public function index(){
        return view(env("URLFOLDER")."Pages.Home.index");
    }
}
