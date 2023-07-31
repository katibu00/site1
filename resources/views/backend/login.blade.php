@extends('frontend.layouts.app')
@section('pageTitle','Login')
@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection
@section('content')

		@include('frontend.layouts.header')

<!--==========================-->
		<!--=         Banner         =-->
		<!--==========================-->
		<section class="page-banner-three">
			<div class="container pr">

				<div class="page-title-wrapper text-left">
					<h1 class="page-title">My Account</h1>

					<ul class="breadcrumbs">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>Sign In</li>
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
		<!-- /.page-banner -->

		<!--==========================-->
		<!--=         Signin         =-->
		<!--==========================-->
		<section class="signin-page">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="gp-tabs account-tabs">
							<ul class="gp-tabs-navigation account-nav wow fadeInUp" data-wow-delay="0.3s">
								<li data-content="inbox" class="active-tab">
									Sign In
								</li>
								<li data-content="signup">
									Sign Up
								</li>
							</ul> <!-- gp-tabs-navigation -->

							<div class="tab-content-inner wow fadeInUp" data-wow-delay="0.5s">
								<ul class="gp-tabs-content wow fadeIn">
									<li data-content="inbox" class="active-tab">
										<form id="login-form">
											<div class="gp-input-group">
												<label for="email_or_phone">User Name</label>
												<input type="text" class="gp-input" name="email_or_phone" id="email_or_phone" placeholder="Name or Email">
											</div>

											<div class="gp-input-group mb-25">
												<label for="password">Passwowd</label>
												<input type="password" class="gp-input" name="password" id="password" placeholder="*****">
											</div>

											<label for="remember" class="condition">
												<input type="checkbox" id="remember" name="remember">
												<span>
													Remember Me
												</span>
											</label>

											<button type="submit" class="gp-btn submit-btn" value="">
												Sign In <i class="ei ei-arrow_right"></i>
											</button>
										</form>
										<!-- /.account-form -->
									</li>

									<li data-content="signup">
										<form action="#" class="account-form">
											<div class="gp-input-group">
												<label for="username">Username</label>
												<input type="text" class="gp-input" name="username" id="username" placeholder="Username">
											</div>

											<div class="gp-input-group">
												<label for="email_address">Email Address</label>
												<input type="email" name="email" class="gp-input" id="email_address" placeholder="example@domain.com">
											</div>

											<div class="gp-input-group mb-25">
												<label for="password">Passwowd</label>
												<input type="password" class="gp-input" name="password" id="password" placeholder="*****">
											</div>

											<label for="check_condition" class="condition">
												<input type="checkbox" name="check_condition" id="check_condition">
												<span>
													I do not wish to receive news and promotions from Astriol Company by email.
												</span>
											</label>

											<button type="button" class="gp-btn submit-btn" value="">
												Sign Up <i class="ei ei-arrow_right"></i>
											</button>
										</form>
										<!-- /.account-form -->
									</li>

								</ul> <!-- gp-tabs-content -->
							</div><!-- /.tab-content-inner -->
						</div>
					</div>
					<!-- /.col-md-8 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.signin-page -->

        @endsection

        @section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<script>
    
		$(document).ready(function() {
			$('#login-form').submit(function(event) {
				event.preventDefault();
				var submitButton = $(this).find('button[type="submit"]');
				submitButton.prop('disabled', true).html(
					'<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
				);

				var formData = new FormData(this);

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					url: '/login',
					type: 'POST',
					data: formData,
					processData: false,
					contentType: false,
					success: function(response) {
						submitButton.prop('disabled', false).text('Login');

						if (response.success) {
							toastr.success('Login successful. Redirecting to dashboard...');
							setTimeout(function() {
								window.location.href = response.redirect_url;
							}, 200);
						} else {
							toastr.danger('Invalid credentials.');
						}
					},
					error: function(xhr, status, error) {
						submitButton.prop('disabled', false).text('Login');

						var response = xhr.responseJSON;
						if (response && response.errors && response.errors.login_error) {
							toastr.danger(response.errors.login_error[0]);
						} else if (response && response.message) {
							toastr.error(response.message);
						} else {
							toastr.error('An error occurred. Please try again.');
						}
					}
				});
			});
		});
	</script>
        @endsection