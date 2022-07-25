<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use app\Models\Blog;
use app\Models\Portfolio;
use app\Models\Resume;
use app\Models\Services;
use app\Models\UserRequestMessages;
use App\Http\Requests\UserMessages;
use App\Models\Contact;

class HomePageContoller extends Controller

    {
        public function index(){
            $contact = Contact::where('id', 1)->first();
            // dd($info);
            $about = About::where('id', 1)->first();
            return view('homepage', compact('contact','about'));
        }
    
    //       public function user_messages(UserMessages $request)
    //       {
    //           $send = UserMessages::create([
    //               'name'      => $request->name,
    //               'email'     => $request->email,
    //               'subject'   => $request->subject,
    //               'message'   => $request->message
                
    //           ]);
    //           if ($send)
    //           {
    //               return redirect()->route('home');
    //           }
           
    //       }
    
      }