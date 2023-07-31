@extends('frontend.layouts.app')

@section('pageTitle', 'Blogs')

@section('content')

    @include('frontend.layouts.header')

    <section class="page-banner banner-single-post" data-bg-image="{{ asset($blog->featured_image) }}">
        <div class="container banner-pr">
            <div class="page-title-wrapper">
                <a href="#" class="single-meta-cat">{{ @$blog->category->name }}</a>
                <h1 class="page-title">
                    {{ $blog->title }}
                </h1>
    
                <ul class="post-meta">
                    <li><i class="ei ei-icon_clock_alt"></i> <a href="#">{{ $blog->created_at->format('M d, Y') }}</a></li>
                </ul>
            </div>
            <!-- /.page-title-wrapper -->
        </div>
        <!-- /.container -->
    </section>
    

    <div class="blog-list-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="astriol__blog-single">
                        {!! $blog->content !!}

                        <div class="blog-footer">
                            <div class="post-tags">
                                <div class="tagcloud">
                                    <span>Tags: </span>
                                    <a href="#">Softwere</a>
                                    <a href="#">Saas</a>
                                    <a href="#">App UX</a>
                                </div>
                            </div>

                            <div class="blog-share">
                                <span>Share: </span>
                                <ul class="blog-share-social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.astriol__blog-single -->

                   <div class="author-info_wrapper">
							<div class="author-info_avatar">
								<img alt="astriol avatar" src="/authors/{{ $blog->author->image }}" class="avatar">
							</div>
							<div class="author-info_content">
								<div class="author-info_description">
									<h5 class="author-info_name">
										{{ $blog->author->name }}
										<span class="author-excerpt_name">About Author</span>
									</h5>
									<p>
									{{ $blog->author->about }}
									</p>
								</div>
							</div>
						</div>


                </div>
                <!-- /.col-md-8 -->

                <div class="col-md-4 sidebar-container sidebar-widget-area">
                    <aside class="sidebar">
                        <div id="search-2" class="widget astriol_widget widget_search">
                            <form role="search" method="get" class="search-form" action="#">
                                <label>
                                    <input type="search" class="search-field" placeholder="Search..." name="s" title="Search for:">
                                </label>
                                <button type="submit" class="search-submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>

                        <div id="gp-posts-widget-2" class="widget gp-posts-widget">
                            <h2 class="widget-title">Recent Posts</h2>
                            <div class="gp-posts-widget-wrapper">
                                @foreach ($recentPosts as $post)
                                <div class="post-item">
                                    <div class="post-widget-thumbnail">
                                        <a href="#">
                                            <!-- Replace with the URL of the post thumbnail -->
                                            <img src="/{{ $post->featured_image }}" alt="Featured Image">
                                        </a>
                                    </div>
                                    <div class="post-widget-info">
                                        <h5 class="post-widget-title">
                                            <!-- Replace with the URL of the post -->
                                            <a href="{{ route('blog.show', $post->slug) }}" title="{{ $post->title }}">{{ $post->title }}</a>
                                        </h5>
                                        <ul class="post-meta">
                                            <!-- Add the appropriate attributes for date and category -->
                                            <li><a href="#">{{ $post->created_at->format('M d, Y') }}</a></li>
                                            {{-- <li><a href="#">{{ $post->category->name }}</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div id="categories" class="widget widget_categories">
                            <h2 class="widget-title">Categories</h2>
                            <ul>
                                @foreach ($categories as $category)
                                <li>
                                    <!-- Replace with the URL of the category page -->
                                    <a href="">{{ $category->name }} <span class="count">({{ $category->blogs->count() }})</span></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <aside id="tags" class="widget widget_tag">
                            <h3 class="widget-title">Popular Tags</h3>
                            <div class="tagcloud">
                                {{-- @foreach ($tags as $tag)
                                <!-- Replace with the URL of the tag page -->
                                <a href="{{ route('tag.show', $tag->slug) }}">{{ $tag->name }}</a>
                                @endforeach --}}
                            </div>
                        </aside>
                    </aside>
                    <!-- /.sidebar -->
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

@endsection
