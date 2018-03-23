<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logincontroller extends Controller
{
    public function home()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // User::insert([
        //     'name'=>$request->email,
        //     'email'=>$request->email,
        //     'password'=>$request->password,
        //     'user_type'=>$request->password,
        // ]);
        // return redirect('login')->withErrors('User created Successfully!');
    
       //validation
        $this->validate($request,[
            'email'=>'required|email|max:100',
            'password'=>'required'
        ]);
        $email=$request->email;
        $password=$request->password;
        if (Auth::attempt(['email'=>$email, 'password'=>$password]))
        {
           if (Auth::user()->user_type == "nurse")
           {
               return redirect ('/nurse');
           }else {
               return redirect('/doctor');
           }

        }else {
            return redirect()->back()->withErrors('Wrong username and password');
        }

    }
}
