<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('backend.blogs_index',compact('blogs'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('backend.new_blog',compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'featured' => 'boolean',
            'published' => 'boolean',
            'author_id' => 'nullable|exists:users,id',
        ]);

        $blogPost = new Blog();
        $blogPost->title = $request->input('title');
        $blogPost->slug = Str::slug($request->input('title'));
        $blogPost->content = $request->input('content');
        $blogPost->category_id = $request->input('category_id');
        $blogPost->tags = $request->input('tags');
        $blogPost->featured = $request->has('featured');
        $blogPost->published = $request->has('published');
        $blogPost->author_id = auth()->user()->id;

      

        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/' . $imageName;
            $image->move(public_path('uploads'), $imageName);
            $blogPost->featured_image = $imagePath;
        }

        // Save the blog post to the database
        $blogPost->save();

        // Redirect to the blog post index page or show success message
        return redirect()->route('admin.blogs.index')->with('success', 'Blog post created successfully!');
    }


    public function edit($id)
    {
        // Retrieve the blog post by ID
        $blogPost = Blog::findOrFail($id);

        // Retrieve all categories to populate the dropdown
        $categories = Category::all();

        return view('backend.edit_blog', compact('blogPost', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|max:255',
            'category' => 'required|exists:categories,id',
            'tags' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
            'featured' => 'nullable|boolean',
            'published' => 'nullable|boolean',
        ]);

        // Retrieve the blog post by ID
        $blogPost = Blog::findOrFail($id);

        // Update the blog post with the new data
        $blogPost->title = $request->title;
        $blogPost->slug = Str::slug($request->input('title'));
        $blogPost->category_id = $request->category;
        $blogPost->tags = $request->tags;
        $blogPost->content = $request->content;
        $blogPost->featured = $request->filled('featured');
        $blogPost->published = $request->filled('published');

        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/' . $imageName;
            $image->move(public_path('uploads'), $imageName);
            $blogPost->featured_image = $imagePath;
        }

        $blogPost->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post updated successfully!');
    }

    public function destroy($id)
{
    $blogPost = Blog::findOrFail($id);
    $blogPost->delete();

    return redirect()->route('admin.blogs.index')->with('success', 'Blog post deleted successfully!');

}
}
