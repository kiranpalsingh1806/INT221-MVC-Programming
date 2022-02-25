<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return "Welcome to Laravel Test Controller";
        //return view('test1');
    }
}
