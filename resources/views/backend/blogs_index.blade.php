@extends('frontend.layouts.app')
@section('pageTitle', 'Create New Blog Post')
@section('content')

@include('frontend.layouts.header')

<section class="page-banner-two">

    <div class="container pr">
        <ul class="banner-pertical-three">
            <li>
                <img src="/theme/media/banner/main/rabar.png" data-parallax='{"y": -50, "x": -50}' alt="astriol pertical">
            </li>
            <li>
                <img src="/theme/media/banner/main/flash.png" data-parallax='{"y": -50, "x": 50}' alt="astriol pertical">
            </li>
        </ul>
        
        <div class="page-title-wrapper text-left">
            <h1 class="page-title">Contact</h1>

            <ul class="breadcrumbs">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>



@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

{{-- <section class="page-banner-two"> --}}

    <div class="container pr">
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">All Blogs</h3>
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-success">Create New Blog</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Published</th>
                    <th>Featured</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{{ @$blog->category->name }}</td>
                    <td>{{ $blog->published ? 'Yes' : 'No' }}</td>
                    <td>{{ $blog->featured ? 'Yes' : 'No' }}</td>
                    <td>
                        {{-- <a href="{{ route('admin.blogs.show', $blog->id) }}" class="btn btn-sm btn-info">View</a> --}}
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this blog post?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    </div>
{{-- </section> --}}

@endsection