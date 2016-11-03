<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $name = "onefiter";
       return view('my_laravel')->with('name',$name);
    }
}
