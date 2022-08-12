<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use app\Models\Blog;
use app\Models\Portfolio;
use app\Models\Resume;
use app\Models\Services;
use App\Models\Send;
use App\Http\Requests\UserMessages;
use App\Models\Contact;

class HomePageController extends Controller

    {
        public function index(){
            $contact = Contact::where('id', 1)->first();
            // dd($info);
            $about = About::where('id', 1)->first();
            return view('homepage', compact('contact','about'));
        }
    
          public function user_messages(Request $request)
          {
              $send = Send::create([
                  'name'      => $request->name,
                  'email'     => $request->email,
                  'subject'   => $request->subject,
                  'message'   => $request->message
                
              ]);
              if ($send)
              {
                  return redirect()->route('home');
              }
           
          }
    public function view(){
        return view('homepage');
    }
    
      }