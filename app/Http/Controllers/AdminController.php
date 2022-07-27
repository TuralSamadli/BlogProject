<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\contact;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function return()
    {
        return view('admin.layouts.new');
    }
    public function about()
    {
        $users=contact::where('id', 1)->get();
        return view('admin.about',compact('users'));
    }
    public function message(){
        return view('admin.messages');
    }
    public function info()
    {
        $members=about::where('id', 1)->get();
        return view('admin.contact',compact('members'));
    }
//    public function merge(){
//     $array = array_merge($users,$members);
//    }
public function contact(){
    return view('admin.contact');
}
public function index(){
    return view('admin.about');
}
}
