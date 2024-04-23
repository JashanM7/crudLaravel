<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function create(){
        return view("user.create");
    }

    public function store(Request $request){

        $credentials = $request->validate([
            "username" => ["required"],
            "password" => ["required"],
            "email" => ["required"],
        ]);

        $user = new User();

        $user->name = $request->username;
        $user->password = $request->password;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('user.login');
    }

    public function loginGet(){
        return view("user.login");
    }


    public function loginPost(Request $request){
       
        $credentials = $request->validate([
            "name" => ["required"],
            "password" => ["required"],
        ]);

        if (auth()->attempt($credentials)) {
            return redirect()->route('redirectStoreToList');
        } else {
            return back();
        }
    }

    public function logout(){

        Auth::logout(); 
        return redirect()->route('user.login');
    }



}
