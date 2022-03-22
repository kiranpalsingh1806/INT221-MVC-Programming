<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function getData(Request $req)
    {
        $num1 =  $req->input()["num1"];
        $num2 =  $req->input()["num2"];
        $total = $num1 + $num2;
        return "The addition of two numbers is $total";
    }
}
