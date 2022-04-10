<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobsController extends Controller
{
    function showPage()
     { 
          return view('admin.jobs.list_jobs');
    }
    function addJobs( )
     { 
          return view('admin.jobs.add_job');
    }
        function storeJobs(Request $request )
     { 
         print_r($request->input());
        //   return view('admin.jobs.add_job');
    }
        function editJobs()
     { 
          return view('admin.jobs.edit_job');
    }
            function updateJobs(Request $request )
     { 
        //   return view('admin.jobs.add_job');
    }

}
