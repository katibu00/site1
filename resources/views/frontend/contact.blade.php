@extends('frontend.layouts.app')
@section('pageTitle','Contact Us')
@section('content')

		@include('frontend.layouts.header')

<!--==========================-->
		<!--=         Banner         =-->
		<!--==========================-->
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
				<!-- /.banner-pertical -->

				<div class="page-title-wrapper text-left">
					<h1 class="page-title">Contact</h1>

					<ul class="breadcrumbs">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>Contact</li>
					</ul>
				</div>
				<!-- /.page-title-wrapper -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.page-banner -->

		<!--================================-->
		<!--=         Contact Form         =-->
		<!--================================-->
		<section class="contact-form-page">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="contact-information">
							<h3 class="contact-title">Contact Us</h3>

							<p class="description">
								Got a project in mind? Fill in the form
								or send us a <a href="mailto:info@gptheme.com">direct email</a>.
							</p>

							<div class="info-list">
								<h3 class="info-title">Phone:</h3>
								<p>
									+(347 124 574 342)
								</p>
							</div>
							<!-- /.info-list -->

							<div class="info-list">
								<h3 class="info-title">Email:</h3>
								<p>
									Support@astriol.com
								</p>
							</div>
							<!-- /.info-list -->

							<div class="info-list mb-0">
								<h3 class="info-title">Address:</h3>
								<p>
									541 Melville Astriol, Palo Alto,
									DUSS 943, United States
								</p>
							</div>
							<!-- /.info-list -->

						</div>
						<!-- /.contact-information -->
					</div>
					<!-- /.col-md-4 -->

					<div class="col-md-8">
						<div class="contact-form-wrapper">
							<form action="php/mailer.php" class="contact-form-main" data-gp-form="contact-form">
								<div class="row">
									<div class="col-md-6">
										<input type="text" name="fname" placeholder="Name" class="gp-input">
									</div>
									<!-- /.col-md-6 -->

									<div class="col-md-6">
										<input type="email" name="email" placeholder="Email" class="gp-input">
									</div>
									<!-- /.col-md-6 -->

									<div class="col-md-12">
										<input type="text" name="subject" placeholder="Subject" class="gp-input">
										<textarea name="content" id="message" cols="30" rows="10" class="gp-input gp-textarea" placeholder="Your Comment"></textarea>
										<button type="submit" class="gp-btn btn-submit">Send Message</button>

										<div class="form-result alert">
											<div class="content"></div>
										</div>
										<!-- /.form-result-->
									</div>
								</div>
								<!-- /.row -->
							</form>
							<!-- /.contact-form-main -->
						</div>
						<!-- /.contact-form-wrapper -->
					</div>
					<!-- /.col-md-8 -->
				</div>
				<!-- /.row -->

				<div class="row mt-140">
					<div class="col-sm-4">
						<div class="address-box style-border">
							<h4 class="address-title">
								New York
							</h4>

							<p class="address">
								340 Hilldale Lane Maryville, TN<br>
								46802, United States
							</p>
						</div>
						<!-- /.address-box -->
					</div>
					<!-- /.col-sm-4 -->

					<div class="col-sm-4">
						<div class="address-box">
							<h4 class="address-title">
								Australia
							</h4>

							<p class="address">
								8201 44th Avenue NE, TN 22842,<br>
								Australia
							</p>
						</div>
						<!-- /.address-box -->
					</div>
					<!-- /.col-sm-4 -->

					<div class="col-sm-4">
						<div class="address-box">
							<h4 class="address-title">
								London
							</h4>

							<p class="address">
								425 Montgomery Street,<br>
								TN 37803, London
							</p>
						</div>
						<!-- /.address-box -->
					</div>
					<!-- /.col-sm-4 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.contact-form-page -->

		<!--==============================-->
		<!--=         Google Map         =-->
		<!--==============================-->
		<section class="google-map">
			<div class="gmap3-area" data-lat="40.712776" data-lng="-74.005974" data-address="Address" data-zoom="16" data-mrkr="media/feature/marker.svg" data-scrollwheel="false"></div>
		</section>
		<!-- /.google-map -->
        @endsection