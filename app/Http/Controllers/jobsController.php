<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



class jobsController extends Controller
{
    function showPage()
     { 
        //   return view('admin.jobs.list_jobs');
        // return response(Auth::users());
        $jobs=Job::orderBy('id','desc')->get();
        return view('admin.jobs.list_jobs')
        ->with('jobs',$jobs)
        ;
        
    }
    function addJobs( )
     { 
          return view('admin.jobs.add_job');
          
    }

        function storeJobs(Request $request )
     { 
         print_r($request->input());
        //   return view('admin.jobs.add_job');
         Validator::validate($request->all(),[
            'name'=>['required','min:3','max:10'],
            'image'=>['required'],
            'place'=>['required'],
            'start'=>['required'],
            'end'=>['required']


        ],[
            'name.required'=>'this field is required',
            'image.required'=>'this field is required',
            'place.required'=>'this field is required',
            'satrt.required'=>'this field is required',
            'end.required'=>'this field is required', 
            


        ]);
        $j=new job();
        $j->name=$request->name;
        $j->image=$request->hasFile('image')?$this->uploadFile($request->file('image')):"default_job.png";
        $j->place=$request->place;
        // $j->start=$request->start;
        // $j->end=$request->end;
        if($j->save()){
        return redirect()->route('all_Jobs')
        ->with(['success'=>'user created successful']);
    }
        return back()->with(['error'=>'can not create user']);


    }
        function editJobs($id)
     { 
        //   return view('admin.jobs.edit_job');
        $job=Job::find($id);
        return view('admin.jobs.edit_job')
        ->with('job',$job);
    }
    function updateJobs(Request $request,$id )
     { 
        //   return view('admin.jobs.add_job');
        $job=job::find($id);
        $job->name=$request->name;
        $job->place=$request->place;
        // $job->start=$request->start;
        // $job->end=$request->end;
        // $job->image=$request->image;
        $job->is_active=$request->is_active;
        if($request->hasFile('image'))
        $job->image=$this->uploadFile($request->file('image'));
        if($job->save())
        return redirect()->route('all_Jobs')->with(['success'=>'data updated successful']);
        return redirect()->back()->with(['error'=>'can not update data ']);
    }

    function deleteJob($id){
       $job=job::find($id);
        $job->is_active*=-1;

        if($job->save())
        return back()->with(['success'=>'data updated successful']);
        return back()->with(['error'=>'can not update data']);
    }

    public function uploadFile($file){
        $dest=public_path()."/images/";

        //$file = $request->file('image');
        $filename= time()."_".$file->getClientOriginalName();
        $file->move($dest,$filename);
        return $filename;


    }

}
