<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    public function create()
    {
        return view('backend.register.create');
    }

    public function store()
    {
        $user = request()->validate([
            'name' => 'required|max:60|unique:users,name',
            'email' =>  'required|max:60|unique:users,email',
            'password' => 'required|min:5|max:60'

        ]);

        $user['password'] = bcrypt($user['password']);

        User::create($user);

        session()->flash('success', 'Your account has been registered');
        return redirect()->route('blogs.index');
    }
}
