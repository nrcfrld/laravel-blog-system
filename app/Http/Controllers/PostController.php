<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all(); // isi data semua post kita dari database

        return view("admin.post.index", [
            'posts' => $posts
        ]);
    }

    public function create(){
        return view('admin.post.create-post');
    }

    public function store(Request $request){
        // Validasi Data
        $request->validate([
            'title' => 'required',
            'estimation_read_minutes' => "required|integer",
            'thumbnail_url' => "required|url",
            'body' => "required"
        ]);

        $userId = 1; // sementara kita set user id nya 1

        // Post::create([
        //     'title' => $request->title,
        //     'tags' => $request->tags,
        // 'author_id' => $userId, // sementara kita set author_id nya 1
        //     'estimation_read_minutes' => $request->estimation_read_minutes,
        //     'thumbnail_url' => $request->thumbnail_url,
        //     'body' => $request->body
        // ]);

        // $post = new Post();
        // $post->title = $request->title;
        // $post->tags = $request->tags;
        // $post->author_id = $userId; // sementara kita set author_id nya 1
        // $post->estimation_read_minutes = $request->estimation_read_minutes;
        // $post->thumbnail_url = $request->thumbnail_url;
        // $post->body = $request->body;

        $data = $request->all();
        $data['author_id'] = $userId; // tambahkan author_id ke data

        Post::create($data);

        $request->session()->flash('success', 'Post created successfully!');

        return redirect('/admin/posts');
    }

    public function edit(Post $post){
        // 1. Ambil data post berdasarkan id
        // $post = Post::where('id', $postId);
        // $post = Post::findOrFail($postId);

        // if(!$post){
        //     return redirect("/admin/posts");
        // }

        return view("admin.post.edit-post", [
            'post' => $post
        ]);

    }

    public function update(Post $post, Request $request){
         // Validasi Data
        $request->validate([
            'title' => 'required',
            'estimation_read_minutes' => "required|integer",
            'thumbnail_url' => "required|url",
            'body' => "required"
        ]);

        $post->update($request->all());

        // $request->session()->flash('success', 'Post updated successfully!');
        return redirect('/admin/posts')->with("success", "Post updated successfully!");
    }

    public function destroy(Post $post){
        $post->delete();

        return redirect('/admin/posts')->with("success", "Post deleted successfully!");
    }
}
