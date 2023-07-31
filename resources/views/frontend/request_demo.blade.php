@extends('frontend.layouts.app')
@section('pageTitle','Home')
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
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <p>Please fill in the information below and we will get in touch with you.</p>
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="contact-form-wrapper">
                    <style>
                        .checkbox-group {
                            display: flex;
                            flex-direction: column;
                        }

                        .checkbox-item {
                            margin-bottom: -15px;
                        }

                        .form-group label {
                            font-weight: bold;
                        }
                    </style>

                    <form action="{{ route('request-demo') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" placeholder="">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="school_name">Your School Name <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control @error('school_name') is-invalid @enderror" name="school_name" id="school_name" value="{{ old('school_name') }}" placeholder="">
                            @error('school_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="position">Position in School? <span class="text-danger"> *</span></label>
                            <select class="form-control @error('position') is-invalid @enderror" name="position" id="position">
                                <option value=""></option>
                                <option value="Teacher" @if(old('position') === 'Teacher') selected @endif>Teacher</option>
                                <option value="Principal" @if(old('position') === 'Principal') selected @endif>Principal</option>
                                <option value="Vice Principal" @if(old('position') === 'Vice Principal') selected @endif>Vice Principal</option>
                                <!-- Add more options here -->
                            </select>
                            @error('position')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone_number">Phone Number <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" placeholder="">
                            @error('phone_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>What specific features or functionalities are you most interested in seeing? <span class="text-danger"> *</span></label>
                            <div class="checkbox-group">
                                <p class="checkbox-item"><input type="checkbox" name="interests[]" value="Online Exam and Assessment Module" @if(is_array(old('interests')) && in_array('Online Exam and Assessment Module', old('interests'))) checked @endif> Online Exam and Assessment Module</p>
                                <p class="checkbox-item"><input type="checkbox" name="interests[]" value="Student Attendance Tracking and Notifications" @if(is_array(old('interests')) && in_array('Student Attendance Tracking and Notifications', old('interests'))) checked @endif> Student Attendance Tracking and Notifications</p>
                                <!-- Add more checkboxes here with different features -->
                            </div>
                            @error('interests')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="integration">What other tools or software are you currently using? <span class="text-danger"> *</span></label>
                            <select class="form-control @error('integration') is-invalid @enderror" name="integration" id="integration">
                                <option value=""></option>
                                <option value="None" @if(old('integration') === 'None') selected @endif>None</option>
                                <option value="Learning Management System (LMS)" @if(old('integration') === 'Learning Management System (LMS)') selected @endif>Learning Management System (LMS)</option>
                                <!-- Add more integration options here -->
                            </select>
                            @error('integration')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="timeline">Do you have any specific timelines or deadlines for implementing a new solution? <span class="text-danger"> *</span></label>
                            <select class="form-control @error('timeline') is-invalid @enderror" name="timeline" id="timeline">
                                <option value=""></option>
                                <option value="Immediate" @if(old('timeline') === 'Immediate') selected @endif>Immediate</option>
                                <option value="No Specific Timeline" @if(old('timeline') === 'No Specific Timeline') selected @endif>No Specific Timeline</option>
                                <!-- Add more timeline options here -->
                            </select>
                            @error('timeline')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="gp-btn btn-submit">Request Demo</button>
                    </form>
  

                </div>
            </div>
        </div>
    </div>
</section>


@endsection