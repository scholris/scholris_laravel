@extends('layout')

@section('title', 'Scholris - EduAidBuddy')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
@endsection

@section('content')
<section class="container about-us-wrapper mt-5">
    <div class="d-flex justify-content-center align-items-center flex-column">
        <p class="about-us-main-text">Platform dedicated to connecting students with valuable scholarship opportunities..</p>
        <p class="about-us-sub-text">At Scholris, we believe that access to education should be as universal as the desire to learn. Our mission is
            to simplify the journey to educational success by connecting students with the scholarships they deserve.
            Whether you're a student looking to fund your dreams or an organization eager to empower the next generation,
            Scholris provides the tools you need to easily discover, apply for, and manage scholarships.
        </p>
        <p class="about-us-sub-text">Scholris was built by Bimochan Poudel, Biplaw Tiwari & Trisha Shrestha as a part of their 5th semester web technology project while studying 
            BSc.CSIT in Prime College (TU), Kathmandu.
        </p>
        <div class="d-flex justify-content-center align-items-center">
            <img src="{{ asset('Images/6.png') }}" class="img-fluid about-us-img" alt="About us image">
        </div>
    </div>
</section>
@endsection
