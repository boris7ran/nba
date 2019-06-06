<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\VerifyUser;

class RegistrationController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $this->validate(request(), User::STORE_RULES);

        $user = new User;

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->is_verified = false;

        $user->save();

        \Mail::to($user)->send(new VerifyUser($user));

        return redirect()->route('login-user');
    }

    public function verify($id)
    {
        $user = User::findOrFail($id);

        \Log::info($user);

        $user->is_verified = true;
        $user->save();

        return view('auth.verified', compact('user'));
    }
}
