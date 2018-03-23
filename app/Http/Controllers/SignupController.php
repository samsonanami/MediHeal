<?php

namespace App\Http\Controllers;

use Crypt;
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
        User::insert([
            'name'=>$request->email,
            'email'=>$request->email,
            'password' => Crypt::encrypt($request->password),
            'user_type'=>$request->password,
        ]);
        return redirect('/')->withErrors('User created Successfully!');
    }
}

