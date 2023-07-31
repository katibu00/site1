@extends('frontend.layouts.app')
@section('pageTitle', 'Home')
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
                <h1 class="page-title">Request a Demo</h1>

                <ul class="breadcrumbs">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>Request a demo</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="contact-form-page">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="thank-you-icon">
                        <i class="fa fa-check-circle fa-5x text-success" aria-hidden="true"></i>
                    </div>
                    <h2>Thank You!</h2>
                    @if(session('success'))
                    <p>{{ session('success') }}</p>
                    @else
                        <p>You do not submit any Demo request. Please go back to home page.</p>
                    @endif
                    <a class="btn btn-primary" href="{{ route('home') }}">Home</a>
                </div>
            </div>
        </div>
    </section>




@endsection
