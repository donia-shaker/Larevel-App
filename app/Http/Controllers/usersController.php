<?php

namespace App\Http\Controllers;

use App\Models\users_tb;
use Illuminate\Http\Request;

class usersController extends Controller
{
        function showPage()
     { 
          return view('front.sign-up');
    }

    public function store(){


    }

        public function allUsers(){


    }


}
