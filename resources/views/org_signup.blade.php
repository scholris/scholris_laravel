@extends('layout')

@section('title', 'Signup as Organization')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/signups.css') }}">
@endsection

@section('content')
<section class="container">
    <div class="d-flex justify-content-center align-items-center">
        <div class="signup-wrapper poppins-medium">
            <a class="d-flex justify-content-center align-items-center" href="/">
                <img src="{{ asset('Images/scholris-dark.png') }}" class="navbar-logo" alt="Scholris" height="50" width="200" />
            </a>
            <h4 class="d-flex justify-content-center align-items-center mt-2 mb-2">SignUp</h4>
            <form>
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="mb-3">
                            <label for="name" class="form-label">Organization Name</label>
                            <input type="text" class="form-control" id="name" name="fname" placeholder="Organization Name" required />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number" required />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                        </div>
                        <div class="mb-3">
                            <label for="confirm-password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm-password" name="cpassword" placeholder="Confirm Password" required />
                        </div>

                        <div class="mb-3">
                            <label for="permanent-address" class="form-label">Permanent Address</label>
                            <input type="text" class="form-control" id="permanent-address" name="paddress" placeholder="Permanent Address" required />
                        </div>
                    </div>
                    <div class="form-check my-4 d-flex justify-content-center align-items-center">
                        <input class="form-check-input mx-2" type="checkbox" id="tnc" name="tnc" required />
                        <label class="form-check-label" for="tnc">I agree with the terms & conditions.</label>
                    </div>
                    <div class="signup">
                        <div class="text-center">
                            <button type="submit" class="primary-btn-filled w-50">Sign Up</button>
                        </div>

                        <div class="text-center">
                            Already a User? <a href="{{ url ('login') }}">Login</a>
                        </div>
                        <div class="text-center">
                            Are you a student? <a href="{{ url ('std_signup') }}">Register</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
