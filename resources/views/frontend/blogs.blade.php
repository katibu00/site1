@extends('frontend.layouts.app')
@section('pageTitle','Blogs')
@section('content')

		@include('frontend.layouts.header')

		<section class="page-banner style-light">

			<ul class="banner-pertical-two">
				<li><img src="/theme/media/banner/header2/tree.png" class="littleSquare" alt="astriol pertical"></li>
				<li><img src="/theme/media/banner/header2/wave.png" alt="astriol pertical"></li>
				<li><img src="/theme/media/banner/header2/bigc.png" alt="astriol pertical"></li>
				<li><img src="/theme/media/banner/header2/dot.png" alt="astriol pertical"></li>
				<li><img src="/theme/media/banner/header2/c1.png" alt="astriol pertical"></li>
				<li><img src="/theme/media/banner/header2/dotsm.png" alt="astriol pertical"></li>
				<li><img src="/theme/media/banner/header2/c2.png" alt="astriol pertical"></li>
				<li><img src="/theme/media/banner/header2/hc1.png" alt="astriol pertical"></li>
				<li><img src="/theme/media/banner/header2/hc2.png" alt="astriol pertical"></li>
			</ul>
			<!-- /.banner-pertical -->

			<div class="page-title-wrapper text-center">
				<h1 class="page-title">Blog</h1>

				<ul class="breadcrumbs">
					<li><a href="index.html">Home</a></li>
					<li>Blog</li>
				</ul>
			</div>
			<!-- /.page-title-wrapper -->

		</section>
		<!-- /.page-banner -->

		<!--========================-->
		<!--=         Blog         =-->
		<!--========================-->


<section class="blog-posts">
    <div class="container">
        <div class="astriol__blogs wow fadeIn" data-wow-delay="0.3s">
            <div class="row">

                <div class="col-md-8">
                    <div class="row">

                        @foreach ($blogPosts as $blogPost)
                        <div class="col-md-6">
                            <div class="astriol__blog-post">
                                <div class="post-thumbnail">
                                    <a href="{{ route('blog.show', $blogPost->slug) }}">
                                        <img src="{{ asset($blogPost->featured_image) }}" alt="Featured Image">
                                    </a>
                                </div>
                                <!-- /.post-thumbnail -->

                                <div class="entry-content">
                                    <a href="#" class="entry-meta">{{ @$blogPost->category->name }}</a>

                                    <h2 class="entry-title">
                                        <a href="{{ route('blog.show', $blogPost->slug) }}">{{ $blogPost->title }}</a>
                                    </h2>

                                    <div class="blog-footer">
                                        <div class="avatar-wrapper">
                                            <span class="author vcard">
                                                <a class="url fn n post-author" href="#">
                                                    <img alt="avater" src="{{ asset('theme/media/blog/author-sm.jpg') }}" class="avatar">
                                                    {{ @$blogPost->author->name }}
                                                </a>
                                            </span>
                                        </div>

                                        <div class="date-meta">
                                            {{ $blogPost->created_at->format('F d, Y') }}
                                        </div>
                                    </div>
                                </div>
                                <!-- /.blog-content -->
                            </div>
                            <!-- /.astriol__blog-post -->
                        </div>
                        <!-- /.col-md-6 -->
                        @endforeach

                    </div>
                    <!-- /.row -->
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
                                @foreach ($recentPosts as $recentPost)
                                <div class="post-item">
                                    <div class="post-widget-thumbnail">
                                        <a href="{{ route('blog.show', $recentPost->slug) }}">
                                            <img src="{{ asset($recentPost->featured_image) }}" alt="thumb">
                                        </a>
                                    </div>
                                    <div class="post-widget-info">
                                        <h5 class="post-widget-title">
                                            <a href="{{ route('blog.show', $recentPost->slug) }}">{{ $recentPost->title }}</a>
                                        </h5>
                                        <ul class="post-meta">
                                            <li><a href="#">{{ @$recentPost->category->name }}</a></li>
                                            <li><a href="#">{{ $recentPost->created_at->format('F d, Y') }}</a></li>
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
                                    <a href="#">{{ $category->name }} <span class="count">({{ $category->blogs->count() }})</span></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div id="widget_recent_comments" class="widget widget_recent_comments">
                            <h2 class="widget-title">Recent Comments</h2>
                            <div class="recent-comments">
                                <!-- Your recent comments markup goes here -->
                            </div>
                        </div>
                        <aside id="tags" class="widget widget_tag">
                            <h3 class="widget-title">Popular Tags</h3>
                            <div class="tagcloud">
                                <!-- Your popular tags markup goes here -->
                            </div>
                        </aside><!-- /.widget -->
                    </aside>
                    <!-- /.sidebar -->
                </div>
                <!-- /.col-md-4 -->

            </div>
        </div>
    </div>
    <!-- /.container -->
</section>

		<!-- /.portfolios -->
@endsection