<?php
//LoopsController
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopsController extends Controller
{
    public function index()
    {
        $users = [
            'Kiranpal',
            'Mukund',
            'Rajesh',
            'Tarun',
        ];
        //return view('menus.services');
        return view('loops',  compact('users'));
    }
}
