<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', ['posts' => Post::all()]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function edit(Post $posts)
    {
        return view('posts.edit', ['posts' => $posts]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:1',
            'body' => 'required'
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    public function update(Request $request, Post $post)
    {
        $upd = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $post->update($upd);

        return redirect()->route('posts.index');
    }
    public function delete(Post $post)
    {
        $post->delete();
        return back();
    }
}
