@extends('frontend.layouts.app')
@section('pageTitle','Contact Us')
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


        <section class="community-posts-area">
			<div class="container">
				<div class="section-heading text-center">
					<h3 class="subtitle wow fadeInUp">Careers</h3>
					<h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">
						Join Our Team Today
					</h2>
				</div>

				<div class="community-posts-wrapper">



                    <style>
                        .job-listing {
                            background-color: #ffffff;
                            border: 1px solid #e1e1e1;
                            border-radius: 6px;
                            padding: 20px;
                            margin-bottom: 20px;
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                            position: relative;
                        }
                    
                        .job-title a {
                            color: #007bff;
                            text-decoration: none;
                            font-size: 18px;
                            font-weight: bold;
                        }
                    
                        .job-title a:hover {
                            text-decoration: underline;
                        }
                    
                        .job-meta-info {
                            list-style: none;
                            margin: 10px 0 0 0;
                            padding: 0;
                        }
                    
                        .job-meta-info li {
                            color: #6c757d;
                            font-size: 14px;
                            margin-bottom: 5px;
                        }
                    
                        .job-meta-info li i {
                            margin-right: 5px;
                        }
                    
                        .btn-primary {
                            background-color: #007bff;
                            color: #ffffff;
                            border: none;
                            padding: 10px 20px;
                            border-radius: 4px;
                            font-size: 16px;
                            cursor: pointer;
                            transition: background-color 0.2s ease-in-out;
                            position: absolute;
                            bottom: 20px;
                            right: 20px;
                        }
                    
                        .btn-primary:hover {
                            background-color: #0056b3;
                        }
                    </style>
                    
                    <div class="job-listing  wow fadeInUp" data-wow-delay="0.5s">
                        <div class="job-title">
                            <a href="#">Sales Associates</a>
                        </div>
                        <ul class="job-meta-info">
                            <li><i class="fas fa-clock"></i> Part-Time</li>
                            <li><i class="fas fa-map-marker-alt"></i> Remote</li>
                            <li><i class="fas fa-money-bill-alt"></i> ₦50,000 - ₦90,000</li>
                        </ul>
                        <a href="{{ route('careers.details') }}" class="btn-primary">Apply Now</a>
                    </div>
                    
					
                   

				</div>
				<!-- /.community-posts-wrapper -->
			</div>
			<!-- /.container -->
		</section>



@endsection