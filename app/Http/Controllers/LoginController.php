<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $name = request('name');
        $password = request('password');

        if (auth()->attempt(['name' => $name, 'password' => $password])) {
            
            // Authentication passed...
            return redirect()->route('all-teams');
        }

        return redirect()->route('login-user');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('login-user');
    }
}
