<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobsController extends Controller
{
    function showPage()
     { 
          return view('admin.jobs.list_jobs');
    }


}
