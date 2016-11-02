<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ArticleController extends Controller
{
    public  function index()
    {
        echo  "index";
    }
    public  function store()
    {
        echo  "store";
    }
    public  function create()
    {
        echo  "create";
    }
}
