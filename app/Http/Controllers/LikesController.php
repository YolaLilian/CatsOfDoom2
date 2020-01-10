<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function store(\App\Post $post) 
    {

        return $post->caption;
    }
}
