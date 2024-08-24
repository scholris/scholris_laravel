@extends('layout')

@section('title', 'Scholris - EduAidBuddy')

@section('content')
<!-- Hero section starts -->
<section class="container hero-section">
  <div class="row">
    <div class="col-sm-12 col-md-6 hero-text-left">
      <h2 class="hero-text-left-up">
        Easily Discover, Apply & Manage Scholarships.
      </h2>
      <h2 class="hero-text-left-down">
        Start your journey to educational excellence today!
      </h2>
      <div class="text-over-buttons">Proceed as?</div>
      <div class="hero-buttons">
        <a href="{{ url('std_signup') }}" class="primary-btn-filled">Student</a>
        <a href="{{ url('org_signup') }}" class="primary-btn-skeleton">Organization</a>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <img src="{{ asset('Images/hero-img.png') }}" class="img-fluid" alt="hero-img" />
    </div>
  </div>
</section>
<!-- Hero section ends -->

<!-- Scholarship listings starts -->
<section class="container" id="scholarships">
  <h3 class="d-flex justify-content-center align-items-center listed-scholarships">
    Listed Scholarships
  </h3>

  <div class="home-scholarship-listings">
    <div class="scholarship-card">
      <div class="row">
        <div class="col-lg-10 card-left">
          <h5 class="card-header">Nepal Army Welfare Scholarship</h5>
          <div class="card-content">Open From: April 28, 2024</div>
          <div class="card-content">Until: June 02, 2024</div>
          <div class="card-content">Scholarship Amount: NRs. 20000 per year</div>
          <div class="card-content">
            For: sons and daughters of current and retired Nepali Army soldiers
          </div>
        </div>
        <div class="col-lg-2 card-right">
          <a href="#" class="card-btn-filled">Apply now</a>
          <a href="#" class="card-btn-skeleton">View Details</a>
        </div>
      </div>
    </div>

    <!-- Repeat the above block for each scholarship listing -->
  </div>
</section>
<!-- Scholarship listings ends -->
@endsection
