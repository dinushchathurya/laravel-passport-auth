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
    
    public function show($id)
    {
        $post = auth()->user()->posts()->find($id);
 
        if (!$post) {
            return response()->json([
                'success' => false,
                'message' => 'Post not found '
            ], 400);
        }
 
        return response()->json([
            'success' => true,
            'data' => $post->toArray()
        ], 400);
    }
}
