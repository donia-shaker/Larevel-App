<?php

namespace App\Http\Controllers;

use App\Models\users_tb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class usersController extends Controller
{

    function showloginPage()
     { 
          return view('front.login');
    }

        function showRegisterPage()
     { 
          return view('front.sign-up');
    }

        public function login(Request $request){
            Validator::validate($request->all(),[
            'email'=>['required','email'],
            'password'=>['required']


            ],[
            'email.required'=>'this field is required',
            'email.email'=>'incorrect email format',
            'password.required'=>'password is required',
         ]);

            $u=new users_tb();
            $u->email=$request->input('email');
            $u->password=$request->password;

            $u->save();
            

    }

    public function register(Request $request){
    //    print_r( $request->input());


        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:10'],
            'email'=>['required','email','unique:users,email'],
            'password'=>['required','min:5'],
            'confirm_pass'=>['same:password']


        ],[
            'name.required'=>'this field is required',
            'name.min'=>'can not be less than 3 letters', 
            'email.unique'=>'there is an email in the table',
            'email.required'=>'this field is required',
            'email.email'=>'incorrect email format',
            'password.required'=>'password is required',
            'password.min'=>'password should not be less than 3',
            'confirm_pass.same'=>'password dont match',


        ]);
        $u=new users_tb();
        $u->name=$request->name;
        $u->password=$request->password;
        $u->email=$request->email;
        if($u->save())
        return redirect()->route('index')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);


    }

        public function allUsers(){


    }


}
