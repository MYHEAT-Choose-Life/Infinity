<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Homepage / Post lists
    public function index(Request $request)
    {
        $query = Post::query();

        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('title', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('content', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('author', 'LIKE', "%{$searchTerm}%");
            });
        }

        // Clone the query for each type to apply the search filter to all
        $trending = (clone $query)->where('type', 'trending')->orderBy('published_at', 'desc')->get();
        $opinion  = (clone $query)->where('type', 'opinion')->orderBy('published_at', 'desc')->get();
        $videos   = (clone $query)->where('type', 'video')->orderBy('published_at', 'desc')->get();

        return view('articlelist', compact('trending', 'opinion', 'videos'));
    }

    // Single post page
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('article', compact('post'));
    }
}
