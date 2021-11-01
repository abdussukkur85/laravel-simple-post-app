<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function index() {
        $posts = Post::paginate(2);
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
    }
}
