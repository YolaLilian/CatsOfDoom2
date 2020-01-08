<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\Tags;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        // $posts = Post::all();
        $posts = Post::with('tags')->get();
        return view('posts/index', compact('posts', 'tags'));
    }
    public function create()
    {
        if(auth()->user()->role_id !==1) {
            return redirect('/nope');
        }

        return view('posts/create');
    }

    public function store() 
    {
        if(auth()->user()->role_id !==1) {
            return redirect('/nope');
        }

        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
            'tags_id' => 'required'
        ]);
        
        $imagePath = (request('image')->store('uploads', 'public'));

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(600, 600);
        $image->save();

        Post::create([
            'caption'=> $data['caption'],
            'image' => $imagePath,
            'tags_id' => $data['tags_id']
        ]);
        // Post::create($data)->toSql();
        return redirect()->route('posts.index');
    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
