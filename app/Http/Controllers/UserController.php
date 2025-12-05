<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //register the user
    public function register(Request $request){
        $incomingData = $request->validate([
            "name"=>["required", "string", "max:255"],
            "email"=>["required", "string"],
            "password"=>["required", "string", "min:3"]
        ]);
        $incomingData["password"] = bcrypt($incomingData["password"]);
        $user = User::create($incomingData);
        auth()->login($user);
        return redirect("/");
    }

    //login the user
    public function login(Request $request){
        $credentials = $request->validate([
            "nameSent"=>["required", "string"],
            "passwordSent"=>["required", "string"]
        ]);
        //$credentials["passwordSent"] = bcrypt($credentials["passwordSent"]);
        if(auth()->attempt([
            'name' => $credentials['nameSent'],
            'password' => $credentials['passwordSent'],
        ])){
            $request->session()->regenerate();
            return redirect("/page1");
        }
        return redirect("/")->withErrors([
            "loginErr" => "Incorrect username or password."
        ]);
    }

    //logout the user
    public function logout(Request $request){
        auth()->logout();
        return redirect("/");
    }
}
