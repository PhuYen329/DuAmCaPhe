<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SatffsController 
{
    public function index(){
       return view(env("URLFOLDERSTAFFS")."Pages.Home.index");
    }
}
