<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadForm()
    {
        return view('upload');
    }
    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:2048'
        ]);
        $request->file->store('public/uploads');
        return "File has been uploaded :)";
    }
}
