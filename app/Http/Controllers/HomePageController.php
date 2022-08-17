<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use app\Models\Blog;
use App\Models\Resume;
use app\Models\Services;
use App\Models\Send;
use App\Http\Requests\UserMessages;
use App\Models\Contact;
use Illuminate\Support\Carbon;

class HomePageController extends Controller

    {
        public function index(){
            $contact = Contact::where('id', 1)->first();
            // dd($info);
            $about = About::where('id', 1)->first();
            $birthdate   = $about->birthday;
            $age         = Carbon::parse($birthdate)->age;
            $educations  = Resume::where('is_deleted', 0)->where('resume_type', 1)->get();
            $experiences = Resume::where('is_deleted', 0)->where('resume_type', 2)->get(); 

            return view('homepage', compact('contact','about','educations','experiences','age','birthdate'));

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
                  return redirect()->route('home')->with('success','Message successfully sent');
              }
           
          }
        public function view(){
            return view('homepage');
    
        }
        

    
      }