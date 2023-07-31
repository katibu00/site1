<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\RequestDemo;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        // Get the most recent blogs
        $recentBlogs = Blog::orderBy('created_at', 'desc')->take(5)->get();

        return view('frontend.home', compact('recentBlogs'));
    }
    public function requestDemo()
    {
        return view('frontend.request_demo');
    }

    public function requestDemoSubmit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'school_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'interests' => 'required|array',
            'interests.*' => 'string|max:255',
            'integration' => 'required|string|max:255',
            'timeline' => 'required|string|max:255',
        ]);

       // Convert interests array to JSON for storage
       $interests = json_encode($request->input('interests'));

       // Create a new RequestDemo instance and save it to the database
       RequestDemo::create([
           'name' => $request->input('name'),
           'school_name' => $request->input('school_name'),
           'position' => $request->input('position'),
           'phone_number' => $request->input('phone_number'),
           'interests' => $interests,
           'integration' => $request->input('integration'),
           'timeline' => $request->input('timeline'),
       ]);

        // Redirect back with a success message
        return redirect()->route('thank_you')->with('success', 'Your demo request has been submitted successfully. We will get in touch with you soon.');
    }
}
