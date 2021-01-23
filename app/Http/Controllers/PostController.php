<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = auth()->user()->posts;
 
        return response()->json([
            'success' => true,
            'data' => $posts
        ]);
    }
 
}
