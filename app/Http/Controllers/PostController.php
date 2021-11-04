<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {

    public function __construct() {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }
    public function index() {
        $posts = Post::with(['user', 'likes'])->latest()->paginate(20);
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
    }

    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    public function destroy(Post $post) {
        if ($post->ownedBy(auth()->user())) {
            $post->delete();
        }
        return back();
    }
}
