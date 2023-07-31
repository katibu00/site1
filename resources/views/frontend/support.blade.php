@extends('frontend.layouts.app')
@section('pageTitle','Support')
@section('content')

@include('frontend.layouts.header')

<!--==========================-->
		<!--=         Banner         =-->
		<!--==========================-->
		<section class="banner banner-comminity">

			<div class="banner-main-content-wrapper">
				<div class="banner-content">
					<h1 class="banner-title text-center wow fadeInUp" data-wow-delay="0.3s">
						Welcome to the <span>Astriol</span><br>
						Help Community
					</h1>
					<div class="banner-search-form-wrapper wow fadeInUp" data-wow-delay="0.5s">
						<form action="#" class="banner-search-form">
							<input type="text" placeholder="Describe your issue" class="search-field">
							<button><i class="ei ei-icon_search"></i></button>
						</form>
						<!-- /.banner-search-form -->
					</div>
					<!-- /.banner-button-container -->

					<div class="banner-content-bg text-center wow fadeInDown">
						<img src="/theme/media/banner/banner-comminity.png" alt="banner-comminity">
					</div>
					<!-- /.banner-content-bg -->
				</div>
				<!-- /.banner-content -->

			</div>
			<!-- /.banner-main-content-wrapper -->

		</section>
		<!-- /.banner banner-main -->

		<!--==================================-->
		<!--=         Community Help         =-->
		<!--==================================-->
		<section class="comminity-help">
			<div class="container">
				<div class="section-heading text-center">
					<h3 class="subtitle wow fadeInUp">Categories posts</h3>
					<h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">
						Help Center
					</h2>
				</div>
				<!-- /.section-heading -->

				<div class="row justify-content-center">
					<div class="col-md-4 col-sm-6">
						<div class="comminity-help-category color-one wow fadeInRight" data-wow-delay="0.5s">
							<div class="category-icon">
								<i class="ei ei-icon_house_alt"></i>
							</div>

							<div class="category-content">
								<h3 class="category-title"><a href="#">Grow Your Business</a></h3>
								<div class="post-count color-one">406 Posts</div>

								<div class="category-image">
									<img src="/theme/media/category/1.png" alt="comminity help">
								</div>
							</div>
						</div>
						<!-- /.comminity-help-category -->
					</div>
					<!-- /.col-md-4 -->

					<div class="col-md-4 col-sm-6">
						<div class="comminity-help-category color--two wow fadeInRight" data-wow-delay="0.7s">
							<div class="category-icon">
								<i class="ei ei-icon_house_alt"></i>
							</div>

							<div class="category-content">
								<h3 class="category-title"><a href="#">Creative Astriol</a></h3>
								<div class="post-count color-one">124 Posts</div>

								<div class="category-image">
									<img src="/theme/media/category/2.png" alt="comminity help">
								</div>
							</div>
						</div>
						<!-- /.comminity-help-category -->
					</div>
					<!-- /.col-md-4 -->

					<div class="col-md-4 col-sm-6">
						<div class="comminity-help-category color--three wow fadeInRight" data-wow-delay="0.9s">
							<div class="category-icon">
								<i class="ei ei-icon_house_alt"></i>
							</div>

							<div class="category-content">
								<h3 class="category-title"><a href="#">Working with Docs</a></h3>
								<div class="post-count color-one">147 Posts</div>

								<div class="category-image">
									<img src="/theme/media/category/3.png" alt="comminity help">
								</div>
							</div>
						</div>
						<!-- /.comminity-help-category -->
					</div>
					<!-- /.col-md-4 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.comminity-help -->

		<!--===============================-->
		<!--=         Feature Box         =-->
		<!--===============================-->
		<section class="feature-comminity">
			<div class="container">
				<div class="section-heading">
					<h3 class="subtitle wow fadeInUp">Service</h3>
					<h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">
						Get Involved
					</h2>
				</div>
				<!-- /.section-heading -->

				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-seven wow fadeInRight" data-wow-delay="0.3s">
							<div class="icon-container color-one">
								<img src="/theme/media/feature/24.png" alt="Astriol Icon">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service.html">Attend an Event</a>
								</h3>

								<p>
									Say cracking goal why bugger<br> do one happy days.
								</p>

								<a href="service.html" class="more-info">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="12px">
										<path fill-rule="evenodd" fill="rgb(204, 203, 210)" d="M-0.000,4.999 L36.200,4.999 L32.600,1.399 L34.000,-0.002 L40.000,5.998 L34.000,11.998 L32.600,10.598 L36.200,6.998 L-0.000,6.998 L-0.000,4.999 Z" />
									</svg>
								</a>
							</div>
						</div>
						<!-- /.icon-box style-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-seven wow fadeInRight" data-wow-delay="0.4s">
							<div class="icon-container color-two">
								<img src="/theme/media/feature/25.png" alt="Astriol Icon">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service.html">Pixel Precision</a>
								</h3>

								<p>
									Say cracking goal why bugger<br> do one happy days.
								</p>

								<a href="service.html" class="more-info">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="12px">
										<path fill-rule="evenodd" fill="rgb(204, 203, 210)" d="M-0.000,4.999 L36.200,4.999 L32.600,1.399 L34.000,-0.002 L40.000,5.998 L34.000,11.998 L32.600,10.598 L36.200,6.998 L-0.000,6.998 L-0.000,4.999 Z" />
									</svg>
								</a>
							</div>
						</div>
						<!-- /.icon-box style-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-seven wow fadeInRight" data-wow-delay="0.5s">
							<div class="icon-container color-three">
								<img src="/theme/media/feature/26.png" alt="Astriol Icon">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service.html">Cloud Service</a>
								</h3>

								<p>
									Say cracking goal why bugger<br> do one happy days.
								</p>

								<a href="service.html" class="more-info">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="12px">
										<path fill-rule="evenodd" fill="rgb(204, 203, 210)" d="M-0.000,4.999 L36.200,4.999 L32.600,1.399 L34.000,-0.002 L40.000,5.998 L34.000,11.998 L32.600,10.598 L36.200,6.998 L-0.000,6.998 L-0.000,4.999 Z" />
									</svg>
								</a>
							</div>
						</div>
						<!-- /.icon-box style-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-seven wow fadeInRight" data-wow-delay="0.6s">
							<div class="icon-container color-four">
								<img src="/theme/media/feature/27.png" alt="Astriol Icon">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service.html">Content Analyzer</a>
								</h3>

								<p>
									Say cracking goal why bugger<br> do one happy days.
								</p>

								<a href="service.html" class="more-info">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="12px">
										<path fill-rule="evenodd" fill="rgb(204, 203, 210)" d="M-0.000,4.999 L36.200,4.999 L32.600,1.399 L34.000,-0.002 L40.000,5.998 L34.000,11.998 L32.600,10.598 L36.200,6.998 L-0.000,6.998 L-0.000,4.999 Z" />
									</svg>
								</a>
							</div>
						</div>
						<!-- /.icon-box style-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-seven wow fadeInRight" data-wow-delay="0.7s">
							<div class="icon-container color-five">
								<img src="/theme/media/feature/28.png" alt="Astriol Icon">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service.html">Custom Reports</a>
								</h3>

								<p>
									Say cracking goal why bugger<br> do one happy days.
								</p>

								<a href="service.html" class="more-info">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="12px">
										<path fill-rule="evenodd" fill="rgb(204, 203, 210)" d="M-0.000,4.999 L36.200,4.999 L32.600,1.399 L34.000,-0.002 L40.000,5.998 L34.000,11.998 L32.600,10.598 L36.200,6.998 L-0.000,6.998 L-0.000,4.999 Z" />
									</svg>
								</a>
							</div>
						</div>
						<!-- /.icon-box style-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-seven wow fadeInRight" data-wow-delay="0.8s">
							<div class="icon-container color-six">
								<img src="/theme/media/feature/29.png" alt="Astriol Icon">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service.html">Download Software</a>
								</h3>

								<p>
									Say cracking goal why bugger<br> do one happy days.
								</p>

								<a href="service.html" class="more-info">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="12px">
										<path fill-rule="evenodd" fill="rgb(204, 203, 210)" d="M-0.000,4.999 L36.200,4.999 L32.600,1.399 L34.000,-0.002 L40.000,5.998 L34.000,11.998 L32.600,10.598 L36.200,6.998 L-0.000,6.998 L-0.000,4.999 Z" />
									</svg>
								</a>
							</div>
						</div>
						<!-- /.icon-box style-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#feature -->

		<!--==========================-->
		<!--=         CountUp        =-->
		<!--==========================-->
		<div id="countdown-community">
			<div class="container">

				<div class="section-heading text-center">
					<h3 class="subtitle wow fadeInUp">Fun Facts</h3>
					<h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">
						Over 1600+ Completed work &<br>
						Still counting.
					</h2>
				</div>
				<!-- /.sectiob-heading -->

				<div class="comminity-countup-wrapper">
					<div class="comminity-count-item">
						<div class="fun-fact color-one wow fadeInUp" data-wow-delay="0.3s">
							<div class="count-icon-container">
								<img src="/theme/media/funfact/1.png" alt="astriol funfact">
							</div>
							<!-- /.icon-box -->
							<h4 class="count" data-counter="784">784 </h4>
							<p class="count-name">Users</p>
						</div>
						<!-- /.fun-fact -->
					</div>
					<!-- /.comminity-count-item -->

					<div class="comminity-count-item">
						<div class="fun-fact color-two wow fadeInUp" data-wow-delay="0.5s">
							<div class="count-icon-container">
								<img src="/theme/media/funfact/2.png" alt="astriol funfact">
							</div>
							<!-- /.icon-box -->
							<h4 class="count" data-counter="1234">12,34 </h4>
							<p class="count-name">Topics</p>
						</div>
						<!-- /.fun-fact -->
					</div>
					<!-- /.comminity-count-item -->

					<div class="comminity-count-item">
						<div class="fun-fact color-three wow fadeInUp" data-wow-delay="0.7s">
							<div class="count-icon-container">
								<img src="/theme/media/funfact/3.png" alt="astriol funfact">
							</div>
							<!-- /.icon-box -->
							<h4 class="count" data-counter="364">364 </h4>
							<p class="count-name">Tags</p>
						</div>
						<!-- /.fun-fact -->
					</div>
					<!-- /.comminity-count-item -->

					<div class="comminity-count-item">
						<div class="fun-fact color-four wow fadeInUp" data-wow-delay="0.9s">
							<div class="count-icon-container">
								<img src="/theme/media/funfact/4.png" alt="astriol funfact">
							</div>
							<!-- /.icon-box -->
							<h4 class="count" data-counter="189">189 </h4>
							<p class="count-name">Forums</p>
						</div>
						<!-- /.fun-fact -->
					</div>
					<!-- /.comminity-count-item -->

					<div class="comminity-count-item">
						<div class="fun-fact color-five wow fadeInUp" data-wow-delay="0.9s">
							<div class="count-icon-container">
								<img src="/theme/media/funfact/5.png" alt="astriol funfact">
							</div>
							<!-- /.icon-box -->
							<h4 class="count" data-counter="274">274 </h4>
							<p class="count-name">Replies</p>
						</div>
						<!-- /.fun-fact -->
					</div>
					<!-- /.comminity-count-item -->

				</div>
				<!-- /.creative-countup-wrapper -->
			</div>
			<!-- /.container -->

			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="smile-two" data-parallax='{"y": 50}' width="250px" height="250px">
				<path fill-rule="evenodd" fill="rgb(239, 239, 239)" d="M125.000,249.999 C56.075,249.999 -0.000,193.924 -0.000,124.999 C-0.000,56.074 56.075,-0.001 125.000,-0.001 C193.926,-0.001 250.000,56.074 250.000,124.999 C250.000,193.924 193.925,249.999 125.000,249.999 ZM200.620,43.160 C180.733,24.770 154.158,13.513 125.000,13.513 C63.526,13.513 13.514,63.525 13.514,124.999 C13.514,143.622 18.110,161.189 26.218,176.637 C31.542,186.780 38.379,196.010 46.433,204.019 C66.601,224.073 94.378,236.485 125.000,236.485 C186.473,236.485 236.486,186.473 236.486,124.999 C236.486,107.801 232.570,91.501 225.585,76.940 C219.445,64.144 210.931,52.694 200.620,43.160 ZM124.761,194.254 C121.851,194.254 118.932,194.090 116.009,193.753 C93.238,191.126 72.186,178.018 59.694,158.686 L71.044,151.350 C81.367,167.326 98.755,178.159 117.558,180.328 C141.686,183.111 165.782,171.735 178.955,151.350 L190.306,158.686 C175.960,180.884 150.905,194.254 124.761,194.254 ZM167.794,110.641 C160.331,110.641 154.281,104.591 154.281,97.127 C154.281,89.664 160.331,83.613 167.794,83.613 C175.258,83.613 181.308,89.664 181.308,97.127 C181.308,104.591 175.258,110.641 167.794,110.641 ZM84.178,110.641 C76.715,110.641 70.665,104.591 70.665,97.127 C70.665,89.664 76.715,83.613 84.178,83.613 C91.642,83.613 97.692,89.664 97.692,97.127 C97.692,104.591 91.642,110.641 84.178,110.641 Z" />
			</svg>

			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="smile-one" data-parallax='{"y": -70}' width="630px" height="630px">
				<path fill-rule="evenodd" fill="rgb(239, 239, 239)" d="M315.000,629.999 C141.309,629.999 -0.000,488.688 -0.000,314.998 C-0.000,141.307 141.309,-0.002 315.000,-0.002 C488.693,-0.002 630.000,141.307 630.000,314.998 C630.000,488.688 488.690,629.999 315.000,629.999 ZM505.562,108.764 C455.447,62.420 388.479,34.052 315.000,34.052 C160.086,34.052 34.054,160.084 34.054,314.998 C34.054,361.927 45.637,406.198 66.070,445.125 C79.485,470.686 96.715,493.945 117.011,514.129 C167.835,564.664 237.832,595.942 315.000,595.942 C469.913,595.942 595.945,469.911 595.945,314.998 C595.945,271.658 586.076,230.582 568.474,193.891 C553.002,161.642 531.546,132.789 505.562,108.764 ZM314.398,489.520 C307.065,489.520 299.710,489.106 292.343,488.257 C234.961,481.638 181.908,448.604 150.429,399.888 L179.030,381.403 C205.046,421.662 248.864,448.962 296.247,454.426 C357.049,461.442 417.770,432.774 450.967,381.403 L479.570,399.888 C443.419,455.829 380.280,489.520 314.398,489.520 ZM422.842,278.815 C404.034,278.815 388.787,263.569 388.787,244.761 C388.787,225.953 404.034,210.707 422.842,210.707 C441.650,210.707 456.897,225.953 456.897,244.761 C456.897,263.569 441.650,278.815 422.842,278.815 ZM212.129,278.815 C193.322,278.815 178.075,263.569 178.075,244.761 C178.075,225.953 193.322,210.707 212.129,210.707 C230.937,210.707 246.184,225.953 246.184,244.761 C246.184,263.569 230.937,278.815 212.129,278.815 Z" />
			</svg>
		</div>
		<!-- /#countdown -->

		<!--================================-->
		<!--=         Image Content        =-->
		<!--================================-->
		<section class="community-posts-area">
			<div class="container">
				<div class="section-heading text-center">
					<h3 class="subtitle wow fadeInUp">Featured posts</h3>
					<h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">
						Astriol top Community posts
					</h2>
				</div>

				<div class="community-posts-wrapper">
					<div class="community-post wow fadeInUp" data-wow-delay="0.5s">
						<div class="post-content">
							<div class="author-avatar">
								<img src="/theme/media/about/author1.svg" alt="community post">
							</div>

							<div class="entry-content">
								<h3 class="post-title">
									<a href="#">Con no longer save outlook emails to Astriol</a>
								</h3>
								<p>updated by: robynphd 2 days ago</p>
							</div>
						</div>

						<div class="post-meta-wrapper">
							<ul class="post-meta-info">
								<li><a href="#"><i class="fas fa-eye"></i>478</a></li>
								<li><a href="#"><i class="ei ei-icon_chat_alt"></i>20</a></li>
								<li><a href="#"><i class="ei ei-icon_like_alt"></i>5</a></li>
							</ul>
						</div>
					</div>
					<!-- /.community-post -->

					<div class="community-post wow fadeInUp" data-wow-delay="0.6s">
						<div class="post-content">
							<div class="author-avatar">
								<img src="/theme/media/about/author2.svg" alt="community post">
							</div>

							<div class="entry-content">
								<h3 class="post-title"><a href="#">Connection timeouts</a></h3>
								<p>updated by: Hilary ouse 11 days ago</p>
							</div>
						</div>

						<div class="post-meta-wrapper">
							<ul class="post-meta-info">
								<li><a href="#"><i class="fas fa-eye"></i>478</a></li>
								<li><a href="#"><i class="ei ei-icon_chat_alt"></i>20</a></li>
								<li><a href="#"><i class="ei ei-icon_like_alt"></i>5</a></li>
							</ul>
						</div>
					</div>
					<!-- /.community-post -->

					<div class="community-post wow fadeInUp" data-wow-delay="0.7s">
						<div class="post-content">
							<div class="author-avatar">
								<img src="/theme/media/about/author2.svg" alt="community post">
							</div>

							<div class="entry-content">
								<h3 class="post-title"><a href="#">Astriol full (need help)</a></h3>
								<p>updated by: Weir doe 3 days ago</p>
							</div>
						</div>

						<div class="post-meta-wrapper">
							<ul class="post-meta-info">
								<li><a href="#"><i class="fas fa-eye"></i>478</a></li>
								<li><a href="#"><i class="ei ei-icon_chat_alt"></i>20</a></li>
								<li><a href="#"><i class="ei ei-icon_like_alt"></i>5</a></li>
							</ul>
						</div>
					</div>
					<!-- /.community-post -->


					<div class="community-post wow fadeInUp" data-wow-delay="0.8s">
						<div class="post-content">
							<div class="author-avatar">
								<img src="/theme/media/about/author3.svg" alt="community post">
							</div>

							<div class="entry-content">
								<h3 class="post-title"><a href="#">Syncing is stuck on a mac .What could be the culprit
										herh
									</a>
								</h3>
								<p>updated by: Jake weary 5 days ago</p>
							</div>
						</div>

						<div class="post-meta-wrapper">
							<ul class="post-meta-info">
								<li><a href="#"><i class="fas fa-eye"></i>478</a></li>
								<li><a href="#"><i class="ei ei-icon_chat_alt"></i>20</a></li>
								<li><a href="#"><i class="ei ei-icon_like_alt"></i>5</a></li>
							</ul>
						</div>
					</div>
					<!-- /.community-post -->


					<div class="community-post wow fadeInUp" data-wow-delay="1s">
						<div class="post-content">
							<div class="author-avatar">
								<img src="/theme/media/about/author2.jpg" alt="community post">
							</div>

							<div class="entry-content">
								<h3 class="post-title">
									<a href="#">
										Astriol application keeps crashing at starting mojave
										10.14.6
									</a>
								</h3>
								<p>updated by: Jason response 2 days ago</p>
							</div>
						</div>

						<div class="post-meta-wrapper">
							<ul class="post-meta-info">
								<li><a href="#"><i class="fas fa-eye"></i>478</a></li>
								<li><a href="#"><i class="ei ei-icon_chat_alt"></i>20</a></li>
								<li><a href="#"><i class="ei ei-icon_like_alt"></i>5</a></li>
							</ul>
						</div>
					</div>
					<!-- /.community-post -->


					<div class="community-post wow fadeInUp" data-wow-delay="1.1s">
						<div class="post-content">
							<div class="author-avatar">
								<img src="/theme/media/about/author3.jpg" alt="community post">
							</div>

							<div class="entry-content">
								<h3 class="post-title"><a href="#">Customizing Certificates</a></h3>
								<p>updated by: Miles tone 7 days ago</p>
							</div>
						</div>

						<div class="post-meta-wrapper">
							<ul class="post-meta-info">
								<li><a href="#"><i class="fas fa-eye"></i>478</a></li>
								<li><a href="#"><i class="ei ei-icon_chat_alt"></i>20</a></li>
								<li><a href="#"><i class="ei ei-icon_like_alt"></i>5</a></li>
							</ul>
						</div>
					</div>
					<!-- /.community-post -->

				</div>
				<!-- /.community-posts-wrapper -->

				<div class="button-container text-center wow fadeInUp" data-wow-delay="1.3">
					<a href="#" class="wow gp-btn btn-ass">
						View all featured posts
						<i class="ei ei-arrow_right"></i>
					</a>
				</div>
				<!-- /.button-container -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.community-posts-area -->

		<!--==============================-->
		<!--=         Testimonial        =-->
		<!--==============================-->
		<section class="testimonials-community">
			<div class="container">
				<div class="swiper-container wow fadeInRight testimonia-single" id="testimonial-community" data-effect="fade" data-speed="1000" data-autoplay="5000" data-space="40">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="testimonial">
								<div class="user-avatar">
									<img src="/theme/media/testimonial/4.jpg" alt="astriol user-avatar">
								</div>
								<!-- /.user-avatar -->
								<div class="testi-content">
									<h4 class="review-title">Design Quality</h4>

									<p>
										Show off show off pick your nose and blow off up the duff chimney pot Why chap lost the plot, buggered wellies blatant bender well blimey, what a load of rubbish bodge Richard tosser gutted mate chinwag.
									</p>
								</div>

								<div class="info">

									<h4 class="user-name">Mominul Islam</h4>
									<span class="designation">Full-Stack Web Developer</span>
								</div>
								<!-- /.testi-content -->
							</div>
							<!-- /.testimonial -->
						</div>

						<div class="swiper-slide">
							<div class="testimonial">
								<div class="user-avatar">
									<img src="/theme/media/testimonial/3.jpg" alt="astriol user-avatar">
								</div>
								<!-- /.user-avatar -->
								<div class="testi-content">
									<h4 class="review-title">Design Quality</h4>

									<p>
										Show off show off pick your nose and blow off up the duff chimney pot Why chap lost the plot, buggered wellies blatant bender well blimey, what a load of rubbish bodge Richard tosser gutted mate chinwag.
									</p>
								</div>

								<div class="info">

									<h4 class="user-name">Hanson Deck</h4>
									<span class="designation">UI/UX designer</span>
								</div>
								<!-- /.testi-content -->
							</div>
							<!-- /.testimonial -->
						</div>

						<div class="swiper-slide">
							<div class="testimonial">
								<div class="user-avatar">
									<img src="/theme/media/testimonial/01.jpg" alt="astriol user-avatar">
								</div>
								<!-- /.user-avatar -->
								<div class="testi-content">
									<h4 class="review-title">Design Quality</h4>

									<p>
										Show off show off pick your nose and blow off up the duff chimney pot Why chap lost the plot, buggered wellies blatant bender well blimey, what a load of rubbish bodge Richard tosser gutted mate chinwag.
									</p>
								</div>

								<div class="info">

									<h4 class="user-name">Lurch Schpellchek</h4>
									<span class="designation">App Developer</span>
								</div>
								<!-- /.testi-content -->
							</div>
							<!-- /.testimonial -->
						</div>
					</div>

					<div class="nav-control">
						<div class="gp-nav-prev">
							<i class="ei ei-arrow_carrot-left"></i>
						</div>
						<div class="gp-nav-next">
							<i class="ei ei-arrow_carrot-right"></i>
						</div>

					</div>
					<!-- /.nav-control -->
				</div>

				<h2 class="bottom-title">OUR COMMITMENT</h2>
			</div>
			<!-- /.container -->


		</section>
		<!-- /.testimonials -->

		<!--==========================-->
		<!--=         Feature        =-->
		<!--==========================-->
		<section class="feature-comminity-two">
			<div class="container">
				<div class="section-heading">
					<h3 class="subtitle wow fadeInUp">Help community</h3>
					<h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">
						Get help from the Astriol community
					</h2>
				</div>
				<!-- /.section-heading -->

				<div class="featrure-list-items">
					<div class="row justify-content-center">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="feature-list-item wow fadeInLeft" data-wow-delay="0.4s">
								<div class="icon-container">
									<i class="ei ei-icon_ribbon_alt"></i>
								</div>
								<!-- /.icon-container -->

								<h4 class="list-title">
									<a href="#">Product Design</a>
								</h4>
							</div>
							<!-- /.feature-list-item -->
						</div>
						<!-- /.com-md-3 -->

						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="feature-list-item wow fadeInLeft" data-wow-delay="0.5s">
								<div class="icon-container">
									<i class="ei ei-icon_tools"></i>
								</div>
								<!-- /.icon-container -->

								<h4 class="list-title">
									<a href="#">Development</a>
								</h4>
							</div>
							<!-- /.feature-list-item -->
						</div>
						<!-- /.com-md-3 -->

						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="feature-list-item wow fadeInLeft" data-wow-delay="0.6s">
								<div class="icon-container">
									<i class="ei ei-icon_heart_alt"></i>
								</div>
								<!-- /.icon-container -->

								<h4 class="list-title">
									<a href="#">Social /theme/media</a>
								</h4>
							</div>
							<!-- /.feature-list-item -->
						</div>
						<!-- /.com-md-3 -->

						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="feature-list-item wow fadeInLeft" data-wow-delay="0.7s">
								<div class="icon-container">
									<i class="ei ei-icon_bag_alt"></i>
								</div>
								<!-- /.icon-container -->

								<h4 class="list-title">
									<a href="#">Astriol Community</a>
								</h4>
							</div>
							<!-- /.feature-list-item -->
						</div>
						<!-- /.com-md-3 -->

						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="feature-list-item wow fadeInLeft" data-wow-delay="0.8s">
								<div class="icon-container">
									<i class="ei ei-icon_chat_alt"></i>
								</div>
								<!-- /.icon-container -->

								<h4 class="list-title">
									<a href="#">Be Community</a>
								</h4>
							</div>
							<!-- /.feature-list-item -->
						</div>
						<!-- /.com-md-3 -->

						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="feature-list-item wow fadeInLeft" data-wow-delay="0.9s">
								<div class="icon-container">
									<i class="ei ei-icon_folder-open_alt"></i>
								</div>
								<!-- /.icon-container -->

								<h4 class="list-title">
									<a href="#">Astriol Saas & App</a>
								</h4>
							</div>
							<!-- /.feature-list-item -->
						</div>
						<!-- /.com-md-3 -->

						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="feature-list-item wow fadeInLeft" data-wow-delay="1.1s">
								<div class="icon-container">
									<i class="ei ei-icon_tags_alt"></i>
								</div>
								<!-- /.icon-container -->

								<h4 class="list-title">
									<a href="#">GP Themes</a>
								</h4>
							</div>
							<!-- /.feature-list-item -->
						</div>
						<!-- /.com-md-3 -->

					</div>
					<!-- /.row -->
				</div>
				<!-- /.featrure-list-items -->

				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="icon-box text-center style-eight wow fadeInRight" data-wow-delay="1.3s">
							<div class="icon-container color-one">
								<img src="/theme/media/feature/24.png" alt="Astriol Icon">
							</div>

							<div class="box-content">
								<p>
									Find answers and ask new questions
								</p>

								<a href="#" class="more-info">
									Ask Now
									<i class="ei ei-arrow_right"></i>
								</a>
							</div>
						</div>
						<!-- /.icon-box text-center style-eight -->
					</div>
					<!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="icon-box text-center style-eight wow fadeInRight" data-wow-delay="1.4s">
							<div class="icon-container color-two">
								<img src="/theme/media/feature/25.png" alt="Astriol Icon">
							</div>

							<div class="box-content">

								<p>
									Manage the people
									and discussions you follow
								</p>

								<a href="#" class="more-info">
									How to Manage Subscriptions
									<i class="ei ei-arrow_right"></i>
								</a>
							</div>
						</div>
						<!-- /.icon-box text-center style-eight -->
					</div>
					<!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="icon-box text-center style-eight wow fadeInRight" data-wow-delay="1.5s">
							<div class="icon-container color-three">
								<img src="/theme/media/feature/26.png" alt="Astriol Icon">
							</div>

							<div class="box-content">
								<p>
									Award points, level up, and earn
									new privileges
								</p>

								<a href="#" class="more-info">
									Ask Now
									<i class="ei ei-arrow_right"></i>
								</a>
							</div>
						</div>
						<!-- /.icon-box text-center style-eight -->
					</div>
					<!-- /.col-lg-4 col-md-6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#feature -->

		<!--=================================-->
		<!--=         Call To Action        =-->
		<!--=================================-->
		<section id="call-to-action-community" class="jarallax" data-bg-image="/theme/media/background/action_bg.jpg">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="action-content wow fadeInUp">
							<h2 class="action-title wow fadeInUp">
								New to<br>
								Communities?
							</h2>
						</div>
						<!-- /.action-content -->
					</div>
					<!-- /.col-md-5 -->

					<div class="col-md-7">
						<div class="action-info wow fadeInUp" data-wow-delay="0.3s">
							<p class="description">
								We expect everyone to work together to ensure the safety of our community. All members, leaders, attendees, speakers, sponsors, volunteers, etc. must abide by our code of conduct.
							</p>
							<!-- /.description -->
							<a href="contact.html" class="gp-btn gp-btn-light btn-light-four wow fadeInUp" data-wow-delay="0.5s">Code of conduct <i class="ei ei-arrow_right"></i></a>
						</div>
						<!-- /.action-button -->
					</div>
					<!-- /.col-md-7 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#call-to-action -->


@endsection