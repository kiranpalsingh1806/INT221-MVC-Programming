<?php

namespace App\Http\Controllers;

use Mail;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function getData(Request $req)
    {
        $from =  $req->input()["fromMail"];
        $to =  $req->input()["toMail"];
        $message =  $req->input()["message"];

        $data = [
            'name' => $from,
            'data' => $message
        ];
        $user['to'] = $to;

        Mail::send('mail', $data, function ($messages) use ($user) {
            $messages->to($user['to']);
            $messages->subject("Hello Developer !!!");
        });
    }
}
