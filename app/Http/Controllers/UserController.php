<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function create(){
        return view("user.create");
    }

    public function store(Request $request){

        $credentials = $request->validate([
            "username" => ["required"],
            "password" => ["required"],
        ]);

        $user = new User();

        $user->name = $request->username;
        $user->password = $request->password;

        $user->save();

        return redirect()->route('redirectToLogin');
    }

    public function loginGet(){
        return view("user.login");
    }


    public function loginPost(Request $request){
       
        $credentials = $request->validate([
            "username" => ["required"],
            "password" => ["required"],
        ]);

        if (auth()->attempt($credentials)) {
            return redirect()->intended('/dashboard');
        } else {
            return back();
        }

    }



}
