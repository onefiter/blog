<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
class IndexController extends  Controller
{
    public function index()
    {
        //5.路由命名
        /**
        echo route('profile');
        echo 1111;**/
        //6.路由分组
        return view('welcome');
    }
    public function login()
    {
        //6.路由分组
        return "登录";
    }

}