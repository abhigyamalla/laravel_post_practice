<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    


    public function create(){
        return view ('sessions.create');
    }

    public function store(){
        $attributes=request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(auth()->attempt($attributes)){
            redirect('/')->with('success','welcome back');
        }
        return back()->withInput()
        ->withErrors(['email'=>"no email found"]);

        // throw ValidationException::withMessages([
        //     'email'=>"your provided ccredential could not be verified"
        // ]);
    }


    public function destroy(){
        auth()->logout();
        return redirect('/');

    }
}
