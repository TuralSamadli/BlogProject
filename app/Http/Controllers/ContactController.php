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
    public function update(Request $request){
    $members = About::where('id',1)->update([
        'birthday'         => $request->birthday,
        'city'             => $request->city,
        'study'            => $request->study,
        'website'          => $request->website,
        'interests'        => $request->interests,
        'degree'           => $request->degree,
        'description'      => $request->description
    ]);
    if($members){
        return redirect()->route('index')->with('success','Information updated successfully!');
            }
            else{
                return redirect()->route('index')->with('error','Something went wrong');
            }
    
}}
