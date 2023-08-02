@extends('frontend.layouts.app')
@section('pageTitle','Login')
@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection
@section('content')

		@include('frontend.layouts.header')

		<section class="page-banner-three">
			<div class="container pr">

				<div class="page-title-wrapper text-left">
					<h1 class="page-title">Try for Free</h1>

					<ul class="breadcrumbs">
						<li>
							<a href="{{ route('try') }}">Home</a>
						</li>
						<li>Try For Free</li>
					</ul>
				</div>
				<!-- /.page-title-wrapper -->
			</div>
			<!-- /.container -->

			<ul class="banner-pertical-three parallax-element">
				<li>
					<img src="/theme/media/banner/main/tryangle_dot.png" class="layer" data-depth="0.01" alt="astriol pertical">
				</li>
				<li>
					<img src="/theme/media/banner/main/box_dot.png" class="layer" data-depth="0.03" alt="astriol pertical">
				</li>

				<li>
					<img src="/theme/media/banner/main/rabar.png" class="layer" data-depth="0.02" alt="astriol pertical">
				</li>

				<li>
					<img src="/theme/media/banner/main/box_dot2.png" class="layer" data-depth="0.02" alt="astriol pertical">
				</li>

				<li>
					<img src="/theme/media/banner/main/flash.png" class="layer" data-depth="0.01" alt="astriol pertical">
				</li>
			</ul>
			<!-- /.banner-pertical -->

			<div class="bottom-shape">
				<img src="/theme/media/background/bottom_shape.png" alt="bottom">
			</div>
		</section>

		<section class="signin-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="gp-tabs account-tabs">
                            <h2>Register your School</h2>
        
                            <div class="tab-content-inner wow fadeInUp" data-wow-delay="0.5s">
                                <p>Welcome to IntelliSAS! Before you proceed, please read and acknowledge the following:</p>
        
                                <h4>Important Notices:</h4>
                                <ul>
                                    <li><strong>Decision on Behalf:</strong> By signing up and creating an account for your school, you are confirming that you have the authority to make decisions on behalf of your school. You understand that the software will be used and adopted school-wide.</li>
                                    <li><strong>Consent to Terms:</strong> By clicking "Sign Up" and proceeding with the registration, you agree to the <a href="#">Legal Terms</a> and <a href="#">Terms of Use</a> of our platform.</li>
                                    <li><strong>Data Usage:</strong> You consent to the collection and processing of data as outlined in our <a href="#">Privacy Policy</a>.</li>
                                    <li><strong>Service Limitations:</strong> While we strive to provide the best service possible, please be aware that our platform may have certain limitations and we are not responsible for any disruptions or downtime.</li>
                                </ul>
        
                                <p>By clicking "Sign Up," you agree to all the above notices and confirm that you have the necessary authority to proceed with the registration on behalf of your school.</p>
        
                                <!-- Add your sign-up button here -->
                                <a href="https://app.intelps.cloud/signup" class="btn btn-primary">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
     @endsection
