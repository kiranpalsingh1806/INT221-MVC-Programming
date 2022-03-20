<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UriController extends Controller
{
    public function index(Request $request)
    {
        // Usage of path method
        $path = $request->path();
        echo 'Path Method: ' . $path;
        echo '<br>';

        // Usage of is method
        $pattern = $request->is('user/*');
        if ($pattern) {
            echo 'is Method: TRUE';
            echo '<br>';
        } else {
            echo 'is Method : FALSE';
            echo "<br>";
        }

        //Usage of isMethod method
        $methodname = $request->isMethod('POST');
        if ($methodname) {
            echo 'is Method: TRUE';
            echo '<br>';
        } else {
            echo 'is Method : FALSE';
            echo "<br>";
        }

        //Usage of Method method
        $methodtype = $request->method();
        echo 'Method: ' . $methodtype;
        echo '<br>';

        // Usage of url method
        $url = $request->url();
        echo 'url method: ' . $url;
        echo '<br>';

        // Usage of fullUrl method
        $url1 = $request->fullUrl();
        echo 'fullurl method: ' . $url1;
        echo '<br>';

        $routeis = $request->routeIs('user.*');
        if ($routeis) {
            echo 'is Method: TRUE';
            echo '<br>';
        } else {
            echo 'is Method : FALSE';
            echo "<br>";
        }
    }
}
