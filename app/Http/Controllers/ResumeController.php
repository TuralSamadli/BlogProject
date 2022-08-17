<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;

class ResumeController extends Controller
{
    public function index(){
        $resume=Resume::where('is_deleted',0)->get();
        return view('admin.resume',compact('resume'));
    }
    public function edit($id){
        $resume=Resume::where('id',$id)->first();
         return view('admin.resume_edit',compact('resume'));
    }
    public function update(Request $request){
    $resume=Resume::where('id',$request->id)->update([
      'resume_type'=> $request->resume_type,
      'start_date'=>$request->start_date,
      'end_date'=>$request->end_date,
      'title'=>$request->title,
      'description'=>$request->description,
    ]);

    if($resume){
return redirect()->route('resume.index')->with('success','Resume updated successfully!');
    }
    else{
        return redirect()->route('resume.index')->with('error','Something went wrong');
    }
}
    public function delete(Request $request){
        if(Resume::destroy($request->id)){
            
            return response()->json([
                'message'=> 'Resume was deleted successfully'
            ]);
        }
    }
}