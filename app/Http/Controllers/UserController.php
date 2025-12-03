<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //register the user
    public function register(Request $request){
        $incomingData = $request->validate([
            "name"=>["required", "string", "max:255"],
            "password"=>["required", "string", "min:3"]
        ]);
        $incomingData["password"] = bcrypt($incomingData["password"]);
        print_r($incomingData);
    }
}
