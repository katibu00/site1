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


<section class="blog-form-page my-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-form-wrapper">
                    <form action="{{ route('admin.blogs.store') }}" method="post" class="blog-form-main" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <input type="text" name="title" placeholder="Title" class="gp-input" value="{{ old('title') }}">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            

                            <div class="col-md-12 mb-2">
                                <select name="category_id" class="gp-input">
                                    <option value=""></option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-2">
                                <input type="text" name="tags" placeholder="Tags (comma-separated)" class="gp-input" value="{{ old('tags') }}">
                            </div>
                            

                            <div class="col-md-12">
                                
                                <input type="file" name="featured_image" accept="image/*">
                                @error('featured_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            

                            <div class="col-md-12">
                                <textarea name="content" id="content" class="form-control" rows="5">{{ old('content') }}</textarea>
                                @error('content')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror                           
                             </div>
                            

                            <div class="col-md-6">
                                <input type="checkbox" class="form-check-input" id="featured" name="featured" value="1" {{ old('featured') ? 'checked' : '' }}>
                                <label class="form-check-label" for="featured">Featured</label>
                            </div>
                            

                            <div class="col-md-6">
                                <input type="checkbox" class="form-check-input" id="published" name="published" value="1" {{ old('published') ? 'checked' : 'checked' }}>
                                <label class="form-check-label" for="published">Published</label>
                            </div>
                            

                            <div class="col-md-12">
                                <button type="submit" class="gp-btn btn-submit">Save Post</button>

                                <div class="form-result alert">
                                    <div class="content"></div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </form>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    
</section>

@endsection

@section('js')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        CKEDITOR.replace('content', {
            toolbar: [
                { name: 'document', items: ['Styles', 'Format'] },
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
                { name: 'clipboard', items: ['Undo', 'Redo', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord'] },
                { name: 'links', items: ['Link', 'Unlink'] },
                { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar'] }, // Include 'Image' in the insert items
                { name: 'tools', items: ['Maximize', 'Source'] },
                '/',
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote'] }
            ]
        });
    });
</script>
@endsection
