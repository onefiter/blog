<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        //1.第一种传值方式
        /*
            $name = "onefiter";
            return view('my_laravel')->with('name',$name);
        */
        /*2.第二种传值方式
         * **/

       /*
       $data = [
            'greeting'=>'hi,',
            'name'=>'humor',

        ];

        return view('my_laravel',$data);
       */

        //3.第三种传值方式:compact
        $title = "努力奋斗";
        $data = [
            'greeting'=>'hi,',
            'name'=>'humor',

        ];
        return view('my_laravel',compact('data','title'));


    }
}
