<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        // Response
        return view("auth.login");
    }


    // POST method for login
    public function login(Request $req){

        echo "Email : " . $req->email;
        echo "<br>";
        echo "Password : " . $req->input("password");

        return redirect()->route('home');
    }
}
