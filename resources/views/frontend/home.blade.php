@extends('frontend.layouts.app')
@section('pageTitle', 'Home')
@section('content')

    @include('frontend.layouts.header')


    @include('frontend.layouts.banner')


    <section class="client-logo-marque">
        <div class="container">
            <div class="section-heading style-four font-light">
                <h2 class="section-title">
                    Trusted by more than<br>
                    100 schools
                </h2>
            </div>

            <div class="logo-marque">
                <div class="marquee-wrap">
                    <ul class="logo-marque-items">
                        <li>
                            <div class="logo-item">
                                <a href="#">
                                    <img src="/clients/1.jpg" alt="clients logo">
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="logo-item">
                                <a href="#">
                                    <img src="/clients/2.jpeg" alt="clients logo">
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="logo-item">
                                <a href="#">
                                    <img src="/clients/3.jpeg" alt="clients logo">
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="logo-item">
                                <a href="#">
                                    <img src="/clients/4.jpeg" alt="clients logo">
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="logo-item">
                                <a href="#">
                                    <img src="/clients/5.jpg" alt="clients logo">
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="logo-item">
                                <a href="#">
                                    <img src="/clients/6.jpg" alt="clients logo">
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="logo-item">
                                <a href="#">
                                    <img src="/clients/77.jpg" alt="clients logo">
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="logo-item">
                                <a href="#">
                                    <img src="/clients/8.jpg" alt="clients logo">
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="logo-item">
                                <a href="#">
                                    <img src="/clients/9.png" alt="clients logo">
                                </a>
                            </div>
                        </li>

                      
                    </ul>
                </div>

            </div>


            <div class="btn-container text-center">
                <a href="{{ route('try') }}" class="view-btn">Try for Free <i class="ei ei-arrow_right"></i></a>
            </div>
        </div>

    </section>

    <section class="service-one">
        <div class="container">
            <div class="section-heading style-four">
                <h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">
                    Elevate Your School:<br> Trust Our Superior Solution!
                </h2>
            </div>


            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="icon-box style-one wow fadeInRight" data-wow-delay="0.3s">
                        <div class="icon-container color-one">
                            <i class="ei ei-icon_book_alt icons"></i>
                        </div>

                        <div class="box-content">
                            <h3 class="box-title">
                                <a href="">Complete Solution</a>
                            </h3>

                            <p>
                                All-in-one software for seamless <br> school management.
                            </p>
                        </div>
                    </div>

                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="icon-box style-one wow fadeInRight" data-wow-delay="0.4s">
                        <div class="icon-container color-two">
                            <i class="ei ei-icon_pencil-edit"></i>
                        </div>

                        <div class="box-content">
                            <h3 class="box-title">
                                <a href="">Tailored Features</a>
                            </h3>

                            <p>
                                Customized functionalities to meet the <br> unique needs of your school.
                            </p>
                        </div>
                    </div>

                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="icon-box style-one wow fadeInRight" data-wow-delay="0.5s">
                        <div class="icon-container color-three">
                            <i class="ei ei-icon_cloud-upload_alt"></i>
                        </div>

                        <div class="box-content">
                            <h3 class="box-title">
                                <a href="">Data Security</a>
                            </h3>

                            <p>
                                Robust security measures to protect <br>sensitive school data.
                            </p>
                        </div>
                    </div>

                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="icon-box style-one wow fadeInRight" data-wow-delay="0.6s">
                        <div class="icon-container color-four">
                            <i class="ei ei-icon_search"></i>
                        </div>

                        <div class="box-content">
                            <h3 class="box-title">
                                <a href="">Dedicated Support</a>
                            </h3>

                            <p>
                                Responsive customer support to assist<br> you at every step.
                            </p>
                        </div>
                    </div>

                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="icon-box style-one wow fadeInRight" data-wow-delay="0.7s">
                        <div class="icon-container color-five">
                            <i class="ei ei-icon_piechart"></i>
                        </div>

                        <div class="box-content">
                            <h3 class="box-title">
                                <a href="">Real-Time Insights</a>
                            </h3>

                            <p>
                                Access timely data and analytics for <br>informed decision-making.
                            </p>
                        </div>
                    </div>

                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="icon-box style-one wow fadeInRight" data-wow-delay="0.8s">
                        <div class="icon-container color-six">
                            <i class="ei ei-icon_folder-alt"></i>
                        </div>

                        <div class="box-content">
                            <h3 class="box-title">
                                <a href="">Mobile Accessibility</a>
                            </h3>

                            <p>
                                Conveniently manage school operations<br> anytime, anywhere, from any device.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="dashboard-preview" id="slider-tab">
        <div class="container">
            <div class="section-heading style-four">
                <h2 class="section-title wow fadeInUp">
                    A Comprehensive <br>Solution for Modern Schools
                </h2>

                <p class="description wow fadeInUp" data-wow-delay="0.3s">
                    Empowering Schools with Innovative Tools for Excellence. <br>
                    Discover the Power of Our Feature-Packed ERP Software Tailored for Nigerian Schools.
                </p>
            </div>
            <div class="preview-slider wow fadeInUp" data-wow-delay="0.5s">
                <div class="row align-items-center">
                    <div class="col-md-4 col-sm-12">

                        <div class="astriol-pagination"></div>
                    </div>


                    <div class="col-md-8 col-sm-12">
                        <div class="swiper-container previewSlider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide color-one" data-image="ei ei-icon_documents_alt"
                                    data-title="Early Year Marks">
                                    <div class="slide-image-wrapper">
                                        <img src="/screenshots/early_year_marks.png" alt="Early Year Marks Entry">
                                    </div>

                                </div>
                                <div class="swiper-slide color-two" data-image="ei ei-icon_cloud_alt"
                                    data-title="Parent's Dashboard">
                                    <div class="slide-image-wrapper">
                                        <img src="/screenshots/parents_dashboard.png" alt="Parent's Dashboard">
                                    </div>

                                </div>
                                <div class="swiper-slide color-three" data-image="ei ei-icon_profile"
                                    data-title="Gradebook">
                                    <div class="slide-image-wrapper">
                                        <img src="/screenshots/gradebook.png" alt="Gradebook">
                                    </div>

                                </div>
                                <div class="swiper-slide color-four" data-image="ei ei-icon_grid-2x2"
                                    data-title="Marks Entry">
                                    <div class="slide-image-wrapper">
                                        <img src="/screenshots/marks_entry.png" alt="Marks Entry">
                                    </div>

                                </div>
                                <div class="swiper-slide color-five" data-image="ei ei-icon_group"
                                    data-title="End of Term Report">
                                    <div class="slide-image-wrapper">
                                        <img src="/screenshots/report_card.png" alt="End of Term Report">
                                    </div>

                                </div>
                                <div class="swiper-slide color-six" data-image="ei ei-icon_film"
                                    data-title="CBT Exam">
                                    <div class="slide-image-wrapper">
                                        <img src="/screenshots/cbt_exam_page.png" alt="CBT Exam">
                                    </div>
                                </div>
                                <div class="swiper-slide color-six" data-image="ei ei-icon_film"
                                    data-title="Subjects Offering">
                                    <div class="slide-image-wrapper">
                                        <img src="/screenshots/subjects_offering.png" alt="Subjects Offering">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="intro-video">
        <div class="container">
            <div class="intro-video-wrapper">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6 mw-670">
                        <div class="video-content-wrapper">

                            <h3 class="subtitle wow fadeInUp">PRODUCT DEMO</h3>
                            <h2 class="title wow fadeInUp" data-wow-delay="0.3s">Discover Our Product in Action!</h2>

                            <p class="wow fadeInUp" data-wow-delay="0.5s">
                                Experience our product's power in action – watch the demo video or request a personalized
                                demo for tailored assistance in achieving your goals. </p>

                            <a href="{{ route('request-demo') }}" class="gp-btn color-eight wow fadeInUp" data-wow-delay="0.7s">
                                Request Demo
                            </a>
                            <a href="about.html" class="gp-btn color-one wow fadeInUp" data-wow-delay="0.7s">
                                Try it Free <i class="ei ei-arrow_right"></i>
                            </a>
                        </div>
                        <!-- /.video-content-wrapper -->

                    </div>
                    <!-- /.col-xl-7 col-lg-6 -->

                    <div class="popup-video-warapper">
                        <div class="intro-video-inner wow fadeInRight">
                            <img src="/images/dashboard.png" alt="intro video">
                            <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="popup-video wow pixFadeUp"
                                data-wow-delay="0.6s">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <!-- /.intro-video -->
                    </div>
                    <!-- /.popup-video-arapper -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.intro-video-innter -->
        </div>
        <!-- /.container -->
    </section>


    <section class="testimonials">
        <div class="container">
            <div class="swiper-container wow fadeInRight testimonia-single" id="testimonial" data-effect="fade"
                data-speed="1000" data-autoplay="5000" data-space="40">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <div class="user-avatar">
                                <img src="/authors/ibrahim.jpeg" alt="user-avatar">
                            </div>
                            <!-- /.user-avatar -->
                            <div class="testi-content">
                                <p>
                                    IntelPS has transformed our school management processes. From attendance tracking to report card generation, everything is now streamlined and efficient. The real game-changer is the powerful analytics dashboard that provides us with insights to make informed decisions. Our school has never been more organized and data-driven
                                </p>
                            </div>

                            <div class="info">
                                <ul class="ratings">
                                    <li><i class="ei ei-icon_star"></i></li>
                                    <li><i class="ei ei-icon_star"></i></li>
                                    <li><i class="ei ei-icon_star"></i></li>
                                    <li><i class="ei ei-icon_star"></i></li>
                                    <li><i class="ei ei-icon_star"></i></li>
                                </ul>
                                <h4 class="user-name">Ishaq Idris Omale</h4>
                                <span class="designation">School Administrator</span>
                            </div>
                            <!-- /.testi-content -->
                        </div>
                        <!-- /.testimonial -->
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial">
                            <div class="user-avatar">
                                <img src="/authors/amina.jpeg" alt="user-avatar">
                            </div>
                            <!-- /.user-avatar -->
                            <div class="testi-content">
                                <p>
                                    As a teacher, IntelPS has been a game-changer in my classroom. The easy-to-use interface helps me manage grades, assessments, and communication with parents effortlessly. The virtual classroom integration has enabled seamless online learning, ensuring that education continues uninterrupted even during challenging times.
                                </p>
                            </div>

                            <div class="info">
                                <ul class="ratings">
                                    <li><i class="ei ei-icon_star"></i></li>
                                    <li><i class="ei ei-icon_star"></i></li>
                                    <li><i class="ei ei-icon_star"></i></li>
                                    <li><i class="ei ei-icon_star"></i></li>
                                    <li><i class="ei ei-icon_star"></i></li>
                                </ul>
                                <h4 class="user-name">Mrs Amina Adeleke</h4>
                                <span class="designation">Teacher</span>
                            </div>
                            <!-- /.testi-content -->
                        </div>
                        <!-- /.testimonial -->
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial">
                            <div class="user-avatar">
                                <img src="/theme/media/testimonial/3.jpg" alt="user-avatar">
                            </div>
                            <!-- /.user-avatar -->
                            <div class="testi-content">
                                <p>
                                    IntelPS has bridged the gap between school and home. With the parent communication feature, I'm always in the loop about my child's progress, assignments, and school events. The transparency in fee management has given me confidence in the financial integrity of the school. It's a holistic solution that enhances the entire educational experience.
                                </p>
                            </div>

                            <div class="info">
                                <ul class="ratings">
                                    <li><i class="ei ei-icon_star"></i></li>
                                    <li><i class="ei ei-icon_star"></i></li>
                                    <li><i class="ei ei-icon_star"></i></li>
                                    <li><i class="ei ei-icon_star"></i></li>
                                    <li><i class="ei ei-icon_star"></i></li>
                                </ul>
                                <h4 class="user-name">Mr. Adebayo Adeyemi</h4>
                                <span class="designation">Parent</span>
                            </div>
                            <!-- /.testi-content -->
                        </div>
                        <!-- /.testimonial -->
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <div class="user-avatar">
                                <img src="/authors/proprietor.jpeg" alt="user-avatar">
                            </div>
                            <!-- /.user-avatar -->
                            <div class="testi-content">
                                <p>
                                    Choosing IntelPS was the best decision for our school's growth. The comprehensive suite of modules has simplified staff management, finance tracking, and student progress monitoring. The integration capabilities and excellent support have made the transition smooth, enabling us to focus on educational excellence.
                                </p>
                            </div>

                            <div class="info">
                                <ul class="ratings">
                                    <li><i class="ei ei-icon_star"></i></li>
                                    <li><i class="ei ei-icon_star"></i></li>
                                    <li><i class="ei ei-icon_star"></i></li>
                                    <li><i class="ei ei-icon_star"></i></li>
                                    <li><i class="ei ei-icon_star"></i></li>
                                </ul>
                                <h4 class="user-name">Mrs. Olayinka Oyedeji</h4>
                                <span class="designation">School Proprietor</span>
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
        </div>
        <!-- /.container -->
    </section>

    <!-- Add the section to display recent blogs -->
    <section class="blog-slider">
        <div class="container">
            <div class="section-title-ana wow gptFadeUp">
                <h2>Latest From Our Blog</h2>
            </div>

            <div class="blog-wrapper">
                <div class="swiper-container  wow gptFadeUp" data-wow-delay="0.3s" id="blog-slider" data-space="30"
                    data-breakpoints='{"1024": {"slidesPerView": 3}, "576": {"slidesPerView": 2}, "320": {"slidesPerView": 1}}'>

                    <div class="swiper-wrapper">
                        @foreach ($recentBlogs as $blog)
                            <div class="swiper-slide">
                                <div class="blog-slider-post">
                                    <div class="feature-image">
                                        <a href="{{ route('blog.show', $blog->slug) }}">
                                            <img src="{{ $blog->featured_image }}" alt="blog">
                                        </a>
                                    </div>

                                    <div class="blog-content">
                                        <ul class="post-meta">
                                            <li>
                                                <i class="icon-user icons"></i>By:
                                                <a
                                                    href="{{ route('blog.show', $blog->slug) }}">{{ @$blog->author->name }}</a>
                                            </li>
                                            <li>
                                                <i class="icon-clock icons"></i>
                                                <a
                                                    href="{{ route('blog.show', $blog->slug) }}">{{ $blog->created_at->format('F d, Y') }}</a>
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                                        </h5>
                                        <p>
                                            {!! \Illuminate\Support\Str::limit($blog->content, 100, '...') !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="slider-pagi-inner pg-dark">
                        <div class="swiper-pagination" id="blog-pagination"></div>
                    </div>
                    <!-- /.slider-pagi-inner -->

                </div>
            </div>
            <!-- /.blog-wrapper -->

        </div>
        <!-- /.container -->
    </section>


    <section class="faqs">
        <div class="container">
            <div class="section-heading style-three">
                {{-- <h3 class="subtitle wow fadeInUp">Faq's</h3> --}}
                <h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">
                    Frequently asked questions
                </h2>
            </div>
            <div class="faq-wrapper pr">
                <span class="bg-circle-shape wow fadeIn"></span>
                <div class="row">
                    <div class="col-md-6">
                        <div id="accordionsing" class="faq wow fadeInRight" data-wow-delay="0.5s">
                            <div class="card">
                                <div class="card-header" id="heading10">
                                    <h5>
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse00" aria-expanded="false"
                                            aria-controls="collapse00">How can I request a demo of your software?</button>
                                    </h5>
                                </div>
                                <div id="collapse00" class="collapse" aria-labelledby="heading10"
                                    data-parent="#accordionsing">
                                    <div class="card-body">
                                        <p>
                                            To request a demo of our software, simply click on the "Request Demo" button on our website's homepage. Fill in your details, and one of our representatives will get in touch with you to schedule a personalized demo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card active">
                                <div class="card-header" id="heading20">
                                    <h5>
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse10"
                                            aria-expanded="true" aria-controls="collapse10">Is there a free trial available?</button>
                                    </h5>
                                </div>
                                <div id="collapse10" class="collapse show" aria-labelledby="heading20"
                                    data-parent="#accordionsing">
                                    <div class="card-body">
                                        <p>
                                            Yes, we offer a One-term free trial for our software. During the trial period, you'll have full access to most features and functionalities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading30">
                                    <h5>
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                            Can I cancel my subscription at any time?</button>
                                    </h5>
                                </div>
                                <div id="collapse20" class="collapse" aria-labelledby="heading30"
                                    data-parent="#accordionsing">
                                    <div class="card-body">
                                        <p>
                                            Yes, you can cancel your subscription at any time. There are no long-term commitments, and you'll only be billed for the period you use our service.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading40">
                                    <h5>
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                            Is my data safe and secure? </button>
                                    </h5>
                                </div>
                                <div id="collapse30" class="collapse" aria-labelledby="heading40"
                                    data-parent="#accordionsing">
                                    <div class="card-body">
                                        <p>
                                            Absolutely! We take data security seriously. Our platform is hosted on secure servers, and we use encryption to protect your data.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading40">
                                    <h5>
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                            Can I customize the appearance and branding of your product/service for my school/organization?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse30" class="collapse" aria-labelledby="heading40"
                                    data-parent="#accordionsing">
                                    <div class="card-body">
                                        <p>
                                            Yes, we offer customization options, allowing you to add your school/organization's logo and branding to our software.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <div id="accordionsing-2" class="faq wow fadeInLeft" data-wow-delay="0.5s">
                            <div class="card active">
                                <div class="card-header" id="heading101">
                                    <h5>
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse001"
                                            aria-expanded="false" aria-controls="collapse001">Do you offer customer support?</button>
                                    </h5>
                                </div>
                                <div id="collapse001" class="collapse" aria-labelledby="heading101"
                                    data-parent="#accordionsing-2">
                                    <div class="card-body">
                                        <p>
                                            Yes, we provide dedicated customer support via email and live chat during business hours. Our support team is always ready to assist you.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading201">
                                    <h5>
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse101"
                                            aria-expanded="true" aria-controls="collapse101">How long does it take to set up our account?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse101" class="collapse" aria-labelledby="heading201"
                                    data-parent="#accordionsing-2">
                                    <div class="card-body">
                                        <p>
                                            Setting up your account is quick and easy. It usually takes just a few minutes, and there are templates to download to upload your students, staffs and parents. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading301">
                                    <h5>
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse201" aria-expanded="false"
                                            aria-controls="collapse201">What happens after the free trial ends?</button>
                                    </h5>
                                </div>
                                <div id="collapse201" class="collapse" aria-labelledby="heading301"
                                    data-parent="#accordionsing-2">
                                    <div class="card-body">
                                        <p>
                                            At the end of the free trial, your account will automatically be switched to the plan you selected during signup. You'll be billed accordingly.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading411">
                                    <h5>
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse311" aria-expanded="false"
                                            aria-controls="collapse311">Is your software compatible with mobile devices?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse311" class="collapse" aria-labelledby="heading411"
                                    data-parent="#accordionsing-2">
                                    <div class="card-body">
                                        <p>
                                            Yes, our software is mobile-responsive and works seamlessly on various devices, including smartphones and tablets.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading411">
                                    <h5>
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse311" aria-expanded="false"
                                            aria-controls="collapse311">Can I access my data and reports from multiple devices?</button>
                                    </h5>
                                </div>
                                <div id="collapse311" class="collapse" aria-labelledby="heading411"
                                    data-parent="#accordionsing-2">
                                    <div class="card-body">
                                        <p>
                                            Yes, you can access your data and reports from any device with an internet connection. Our platform is cloud-based for easy accessibility.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading411">
                                    <h5>
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse311" aria-expanded="false"
                                            aria-controls="collapse311">How often do you release updates and add new features?</button>
                                    </h5>
                                </div>
                                <div id="collapse311" class="collapse" aria-labelledby="heading411"
                                    data-parent="#accordionsing-2">
                                    <div class="card-body">
                                        <p>
                                            We regularly release updates and add new features to improve our software based on user feedback and industry trends.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading411">
                                    <h5>
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse311" aria-expanded="false"
                                            aria-controls="collapse311">Are there any limitations on the number of users or students in our account?</button>
                                    </h5>
                                </div>
                                <div id="collapse311" class="collapse" aria-labelledby="heading411"
                                    data-parent="#accordionsing-2">
                                    <div class="card-body">
                                        <p>
                                            Our subscription plans have different user/students limits. You can choose a plan that suits the number of users you need.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.faq-wrapper -->
        </div>
        <!-- /.container -->
    </section>


    {{-- <section class="call-to-action-creative">
        <div class="container pr">

            <div class="call-to-action-wrapper">
                <div class="circle-top">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="300px"
                        height="300px">
                        <defs>
                            <linearGradient id="PSgrad_0" x1="50%" x2="0%" y1="0%" y2="86.603%">
                                <stop offset="0%" stop-color="rgb(124,61,252)" stop-opacity="1" />
                                <stop offset="1%" stop-color="rgb(124,61,252)" stop-opacity="0.99" />
                                <stop offset="100%" stop-color="rgb(255,255,255)" stop-opacity="0" />
                            </linearGradient>

                        </defs>
                        <path fill-rule="evenodd" fill-opacity="0" opacity="0.502" fill="rgb(255, 255, 255)"
                            d="M150.000,-0.000 C232.843,-0.000 300.000,67.157 300.000,150.000 C300.000,232.843 232.843,300.000 150.000,300.000 C67.157,300.000 -0.000,232.843 -0.000,150.000 C-0.000,67.157 67.157,-0.000 150.000,-0.000 Z" />
                        <path fill="url(#PSgrad_0)"
                            d="M150.000,-0.000 C232.843,-0.000 300.000,67.157 300.000,150.000 C300.000,232.843 232.843,300.000 150.000,300.000 C67.157,300.000 -0.000,232.843 -0.000,150.000 C-0.000,67.157 67.157,-0.000 150.000,-0.000 Z" />
                    </svg>
                </div>

                <div class="action-content-inner">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="action-content-wrapper">
                                <h4 class="title" style="font-size: 28px;">
                                    "Beyond Boundaries: How to Attract and Retain Students in Your School"
                                </h4>

                                <p class="description">
                                    Unlock the Secrets to Sustaining School Growth and Success
                                </p>

                                <a href="contact.html" class="gp-btn color-two btn-light btn-circle">Download</a>
                            </div>

                        </div>


                        <div class="col-md-7">
                            <div class="action-image-wrapper">
                                <div class="image-one wow fadeInRight">
                                    <img src="/theme/media/call-to-action/ac_1.png" data-parallax='{"x": -50}'
                                        alt="animated-image-one">
                                </div>
                                <div class="image-two wow fadeInLeft">
                                    <img src="/theme/media/call-to-action/ac_2.png" data-parallax='{"x": 50}'
                                        alt="animated-image-one">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <span class="circle-bottom"></span>
            </div>

        </div>

    </section> --}}

@endsection
