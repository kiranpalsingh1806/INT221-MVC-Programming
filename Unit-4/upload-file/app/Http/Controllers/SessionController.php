<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request)
    {
        //return $request->session()->all();

        if ($request->session()->has('name')) {
            echo $request->session()->get('name');
            echo "<br>";
        } else {
            echo $request->session()->get('something', 'default');
            echo 'No data in the session';
        }

        if ($request->session()->exists('name')) {
            echo "exists";
        }
    }
    public function storeSessionData(Request $request)
    {
        $request->session()->put('name', 'nav');
        // $request->session()->put('count',1);
        // $request->session()->put(["ID"=>123,"occupation"=>"Asst Prof"]);
        //session(["ID"=>123,"occupation"=>"Asst Prof"]);
        //$request->session()->push('address', 'lpu');
        //$request->session()->increment('count'); 
        //$request->session()->increment('count', $incrementBy = 2);  
        echo "Data has been added to the session";
    }
    public function deleteSessionData(Request $request)
    {
        //$request->session()->forget('name');
        //$request->session()->forget(['ID','occupation']);
        $request->session()->flush();
        //$request->session()->pull('ID', 123);
        echo "Data has been removed from the session";
    }
}
