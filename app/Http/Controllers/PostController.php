<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Homepage / Post lists
    public function index()
    {
        $trending = Post::where('type', 'trending')->orderBy('published_at', 'desc')->get();
        $opinion  = Post::where('type', 'opinion')->orderBy('published_at', 'desc')->get();
        $videos   = Post::where('type', 'video')->orderBy('published_at', 'desc')->get();

        return view('articlelist', compact('trending', 'opinion', 'videos'));
    }

    // Single post page
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('article', compact('post'));
    }
}
