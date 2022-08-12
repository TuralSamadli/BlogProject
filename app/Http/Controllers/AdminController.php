<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function return()
    {
        return view('admin.layouts.new');
    }
  
    public function message(){
        return view('admin.messages');
    }
    
        public function about(){
            return view('admin.about');
        }
        public function index(){
    
            $users=Contact::where('id', 1)->first();
            return view('admin.about',compact('users'));
        }
    
        public function store(Request $request)
        {
            $contact = Contact::where('id',1)->update([
                'phone'      => $request->phone,
                'email'   => $request->email,
                'address'   => $request->address,
                'facebook'   => $request->facebook,
                'linkedin'   => $request->linkedin,
                'github'   => $request->github,
                'instagram'   => $request->instagram,


            ]);
            
                 return redirect()-> back()->with('success','Istifadeci melumatlari yenilendi');
            
    }
    }