<?php

namespace App\Http\Controllers;


use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;
class ContactController extends Controller
{
    
    public function info(){
        return view('admin.contact');
    }
    public function index(){

        $members=About::where('id', 1)->first();
        return view('admin.contact',compact('members'));
    }

    public function update(Request $request)
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
