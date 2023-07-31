@extends('frontend.layouts.app')
@section('pageTitle', 'Demo Requests')
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
                <h1 class="page-title">Demo Requests</h1>

                <ul class="breadcrumbs">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>Demo Requests</li>
                </ul>
            </div>
        </div>
    </section>



    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- <section class="page-banner-two"> --}}

    <div class="container pr">
        <div class="card">
           
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>School Name</th>
                            <th>Position</th>
                            <th>Phone Number</th>
                            <th>Interests</th>
                            <th>Integration</th>
                            <th>Timeline</th>
                            <th>Submitted At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($requests as $request)
                            <tr>
                                <td>{{ $request->name }}</td>
                                <td>{{ $request->school_name }}</td>
                                <td>{{ $request->position }}</td>
                                <td>{{ $request->phone_number }}</td>
                                <td>{{ implode(', ', json_decode($request->interests)) }}</td>
                                <td>{{ $request->integration }}</td>
                                <td>{{ $request->timeline }}</td>
                                <td>{{ $request->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- </section> --}}

@endsection
