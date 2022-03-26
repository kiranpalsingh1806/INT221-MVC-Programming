<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsController extends Controller
{
    function getData(Request $req)
    {
        $num1 =  $req->input()["name"];
        $num2 =  $req->input()["email"];
        $num3 =  $req->input()["phone"];
        $num4 =  $req->input()["cgpa"];
        echo "Full name :  $num1 <br>";
        echo "Email Address :  $num2 <br>";
        echo "Phone Number :  $num3 <br>";
        echo "CGPA :  $num4 <br>";
    }
}
