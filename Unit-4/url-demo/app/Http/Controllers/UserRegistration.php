<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserRegistration extends Controller
{
    public function postRegister(Request $request)
    {
        //Retrieve the name input field
        $name = $request->input('name');
        echo 'Name: ' . $name;
        echo '<br>';

        //Retrieve the username input field
        $username = $request->username;
        echo 'Username: ' . $username;
        echo '<br>';

        //Retrieve the password input field
        $password = $request->password;
        echo 'Password: ' . $password;
        echo '<br>';

        if ($request->has('name')) {
            echo 'name is Found with has method';
        } else {
            echo 'Not Found';
        }
        echo '<br>';

        if ($request->has(['username', 'password'])) {
            echo 'username and password Found with has method';
        } else {
            echo 'Not Found';
        }
        echo '<br>';

        if ($request->hasAny(['username', 'password'])) {
            echo 'One of username or password is Found';
        } else {
            echo 'Not Found';
        }
        echo '<br>';

        if ($request->filled('name')) {
            echo 'name is filled';
        }
        echo '<br>';

        if ($request->missing('email')) {
            echo 'email is missing';
        }
        echo '<br>';

        $request->whenFilled('name', function ($input) {
            echo "name is whenfilled:" . $input;
        });
        echo '<br>';

        $request->whenHas('name', function ($input) {
            echo "name is found with whenHas method:" . $input;
        });
    }
}
