<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view("auth.register");
    }

    public function store(){
        $validate = request()->validate([
            "name"=>"required|min:3|max:40",
            "email"=>"required|email|unique:users,email",
            "password"=> "required|confirmed|min:8",
            "role"=>"required|in:parent,teacher"
        ]);

         User::create([
            "name"=> $validate["name"],
            "email"=> $validate["email"],
            "role"=> $validate["role"],
            "password"=> Hash::make($validate["password"])
        ]);
        return redirect()->route("login")->with("success","accounted created succefully");
    }

    public function login(){
        return view("auth.login");
    }

    public function authenticate(){
        $validate = request()->validate([
            "email"=>"required|email",
            "password"=> "required|min:8"
        ]);
 if(auth()->attempt($validate)){
    request()->session()->regenerate();
    return redirect()->route("dashboard")->with("success","Logged in succefully");
 }

        return redirect()->route("login")->withErrors([
            "email"=> "no user found with the provided email and password",

        ]);
    }

    public function logout(){

        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
    return redirect()->route("dashboard")->with("success","loged out succefully");
    }
    public function showParents(){
$users = User::all();
        return view('parents',['users'=>$users]);

    }
    public function showTeachers(){
        $users = User::all();
                return view('teachers',['users'=>$users]);

            }
}