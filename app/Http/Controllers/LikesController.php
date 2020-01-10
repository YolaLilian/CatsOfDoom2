<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class LikesController extends Controller
{
    public function store(\App\Post $post) 
    {

        return auth()->user()->likes()->toggle($post);
    }
}
