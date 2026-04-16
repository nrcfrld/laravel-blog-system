<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request){
        // Response
        return $request->name . " " . $request->age;
    }
}
