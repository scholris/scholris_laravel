@extends('layout')

@section('title', 'Login')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/signups.css') }}">
@endsection

@section('content')
<section class="container">
    <div class="d-flex justify-content-center align-items-center">
        <div class="signup-wrapper poppins-medium">
            <a class="d-flex justify-content-center align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('Images/scholris-dark.png') }}" class="navbar-logo" alt="Scholris" height="40" width="150" />
            </a>
            <!-- <h4 class="d-flex justify-content-center align-items-center mt-2 mb-2">
                Login
            </h4> -->
            <form>
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="my-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                        </div>

                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" style="text-decoration: none; color: var(--primary-color)">Forgot Password?</a>
                            <div class="form-check">
                                <input class="form-check-input mx-2" type="checkbox" id="rememberme" name="rememberme" />
                                <label class="form-check-label" for="rememberme">Remember me</label>
                            </div>
                        </div>

                        <div class="signup">
                            <div class="text-center">
                                <button type="submit" class="primary-btn-filled w-50">Login</button>
                            </div>

                            <div class="text-center">
                                New User? <a href="{{ url('std_signup') }}">Register</a>
                            </div>
                            <div class="text-center">
                                Are you an organization? <a href="{{ url('org_signup') }}">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
