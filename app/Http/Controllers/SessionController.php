<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{

    public function create()
    {
        return view('backend.loginsession.createlogin');
    }

    public function store()
    {
        $user =   request()->validate([

            'email' =>  'required|email',
            'password' => 'required'

        ]);

        if (auth()->attempt($user)) {
            return redirect()->route('blogs.index')->with('success', 'Welcome Back!');
        }
        return back()->withInput()->withErrors(['email' => 'Your provided credentials Could not be matched']);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
