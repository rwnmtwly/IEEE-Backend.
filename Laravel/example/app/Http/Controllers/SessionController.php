<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        //validate the form
        $attributes = request()->validate([
            'email'=>['required', 'email'],
            'password'=>['required']
        ]);

        if(!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email'=>'Sorry, those credentials do not match'
            ]);
        }
        //attempt to login the user
        Auth::attempt($attributes);     //this attempt() method returns a boolean

        //regenerate the session token if login succeeds
        request()->session()->regenerate(); // to protect from session token hijacking which is the exploitaion of a valid session token to gain unauthorized accessto a web server 

        //redirect
        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
