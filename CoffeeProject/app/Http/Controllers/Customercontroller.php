<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CustomerController
{
    public function index(){
        return view(env("URLFOLDERCUS")."Pages.Home.index");
    }
    public function login(){
        return view(env("URLFOLDERCUS")."Pages.Login.index");
    }
}
