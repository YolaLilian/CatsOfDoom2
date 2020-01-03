<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $posts = Post::all();
        return view('posts/index', compact('posts'));
    }
    public function create()
    {
        return view('posts/create');
    }

    public function store() 
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image']
        ]);
        
        $imagePath = (request('image')->store('uploads', 'public'));

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        Post::create([
            'caption'=> $data['caption'],
            'image' => $imagePath 
        ]);
        // Post::create($data)->toSql();
        return redirect()->route('posts.index');
    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
