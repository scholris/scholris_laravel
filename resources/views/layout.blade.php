<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="{{ asset('Images/favicon.svg') }}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ asset('css/variables.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/custom-classes.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  @yield('extra-css')
  <title>@yield('title', 'Scholris')</title>
</head>

<body style="background-color: #f3f3f3;">
  <!-- Navbar starts -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{ asset('Images/scholris-dark.png') }}" class="navbar-logo" alt="Scholris" height="30" width="130" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ url('/#scholarships') }}" class="nav-link">Scholarships</a></li>
          <li class="nav-item"><a href="{{ url('aboutus') }}" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="{{ url('contactus') }}" class="nav-link">Contact Us</a></li>
          <li class="nav-item"><a href="{{ url('login') }}" class="nav-link navbar-btn">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar ends -->

  <!-- Main Content -->
  <div class="container">
    @yield('content')
  </div>

  <!-- Footer starts -->
  <footer class="cc-footer">
    <div class="container">
      <div class="footer-wrapper">
        <div class="row">
          <div class="col-sm-12 col-md-3 footer-section">
            <img src="{{ asset('Images/scholris-light.png') }}" class="navbar-logo" alt="Scholris" height="30" width="130" />
            <div class="footer-head">Genesis Inc.</div>
            <div class="footer-body">
              Schorlris is the ultimate platform for seamless scholarship management.
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="footer-head">Quick Links</div>
            <div class="footer-body"><a href="{{ url('/') }}">Home</a></div>
            <div class="footer-body"><a href="#scholarships">Scholarships</a></div>
            <div class="footer-body"><a href="{{ url('aboutus') }}">About Us</a></div>
            <div class="footer-body"><a href="{{ url('contactus') }}">Contact Us</a></div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="footer-head">Help</div>
            <div class="footer-body"><a href="#">How to use?</a></div>
            <div class="footer-body"><a href="#">Privacy Policy</a></div>
            <div class="footer-body"><a href="#">FAQ</a></div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="footer-head">Contacts</div>
            <div class="footer-body"><a href="#" style="text-wrap: nowrap;"><i class="bi bi-geo-alt-fill"></i> Kathmandu, Nepal</a></div>
            <div class="footer-body"><a href="#"><i class="bi bi-envelope"></i> info@genesis.com</a></div>

            <div class="footer-socials">
              <div class="footer-social-icon">
                <a href="#"><i class="bi bi-facebook"></i></a>
              </div>
              <div class="footer-social-icon">
                <a href="#"><i class="bi bi-instagram"></i></i></a>
              </div>
              <div class="footer-social-icon">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="footer-bottom">
    &copy; 2024 Genesis Inc. All rights reserved.
  </div>
  <!-- Footer ends -->

  <script src="{{ asset('js/navbar.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
