<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class UserBlogController extends Controller
{public function index()
    {
        // Fetch all blog posts with their associated category and user
        $blogPosts = Blog::with('category', 'author')->get();
    
        // Fetch recent blog posts for the sidebar
        $recentPosts = Blog::with('category')->latest()->take(5)->get();
    
        // Fetch all categories with their blog post count for the sidebar
        $categories = Category::withCount('blogs')->get();
    
        return view('frontend.blogs', compact('blogPosts', 'recentPosts', 'categories'));
    }


    public function show($slug)
{
    $blog = Blog::where('slug', $slug)->firstOrFail();

    // Fetch recent posts
    $recentPosts = Blog::where('id','!=',$blog->id)->orderBy('created_at', 'desc')->limit(5)->get();

    // Fetch all tags
    // $tags = Tag::all();

    // Fetch all categories
    $categories = Category::all();

    return view('frontend.single_blog', compact('blog', 'recentPosts', 'categories'));
}
}
