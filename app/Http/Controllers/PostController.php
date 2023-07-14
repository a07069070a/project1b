<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }


    public function show(Post $post) 
    {
        
        return view('posts.show', [
            'post' => $post
            
        ]);

    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:20',
            /*you want to pass in the key - in this case it's the
            title because it's the expected input in the input box. */
            'body' => 'required|min:1'
        ]);

        Post::create($request->only('title', 'body'));



        return redirect()
            ->route('posts.show', 1)
            ->withStatus('Your post has been created.');
        // redirect the user
        
        dd($request);
    }

}
