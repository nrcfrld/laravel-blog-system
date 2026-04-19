<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        // Ambil data posts
        // $posts = Post::all()
        $posts = Post::paginate(2);

        // Response
        return view('home', [
            'posts' => $posts
        ]);
    }
}
