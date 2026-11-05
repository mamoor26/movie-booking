<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class authController extends Controller
{
    // Show register form
    function register()
    {
        return view("auth.register");
    }

    // Show login form
    function login()
    {
        return view("auth.login");
    }

    // Save new user
    function userregister(Request $req)
    {
        $data = $req->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        $register = User::create($data);

        if ($register) {
            return redirect()->route('loginform')->with("success", "User account created successfully");
        } else {
            return redirect()->route('registerform');
        }
    }

    // Login user
    function loginuser(Request $req)
    {
        $data = $req->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $check = Auth::attempt($data);

        if ($check) {
            return redirect()->route("userweb");
        } else {
            return back()->with('error', 'Invalid email or password');
        }
    }

    // Logout user
    function logout()
    {
        Auth::logout();
        return redirect()->route('loginform');
    }
}