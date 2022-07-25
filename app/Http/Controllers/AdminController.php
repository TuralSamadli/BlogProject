<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function return()
    {
        return view('admin.layouts.new');
    }
    public function about()
    {
        $users=Contact::with('detail')->where('id', 1)->get();
        return view('admin.about',compact('users'));
    }
    public function message(){
        return view('admin.messages');
    }
}
