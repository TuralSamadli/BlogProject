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
        public function delete(){
            if(Send::where('id,1')->delete('id,1')){
                
                return response()->json([
                    'message'=> 'Message was deleted successfully'
                ]);
            }
        
    }
}