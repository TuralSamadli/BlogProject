<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){
        return view('uploadfile');
    }
    public function upload(Request $request){
    $request->file->store('public');
    return "File uploaded successfully";
}}
