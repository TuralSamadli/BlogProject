<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Send;

class MessagesController extends Controller
{
   public function index(){
    $messages=Send::where('is_deleted',0)->get();
            return view('admin.messages',compact('messages'));
        }
        public function delete(Request $request){
            //        dd($request->all());
                    if(Send::destroy($request->id)){
                        return "ok";
                    }
                    else{
                        return "no";
                    }
                }
}