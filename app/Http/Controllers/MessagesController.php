<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Send;

class MessagesController extends Controller
{
   public function index(){
    $messages=Send::where('id',1)->first();
            return view('admin.messages',compact('messages'));
        }
    }
