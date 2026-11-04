<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;

class authController extends Controller
{
    function register(){
        return view("auth.register");

    }

     function login(){
        return view("auth.login");

    }
    function userregister(request $req){
        $data=$req->validate([
            'name'=>'required',
            'email'=>'required | email | unique:users,email' ,
            'password'=>'required'

        ]);

        $register=User::create($data);

        if($register){
            return redirect()->route('loginform')->with("success","user account created");

        }
        else{
             return redirect()->route('registerform');
        }

    }

    function loginuser(Request $req){
         $data=$req->validate([

            'email'=>'required | email |' ,
            'password'=>'required'

        ]);
        $check=Auth::attempt($data);
        if($check){
            return redirect()->route("userweb");

        }
        else{
                return back()->with('error','user not found');

        }
    }
}
