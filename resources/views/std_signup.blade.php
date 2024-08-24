@extends('layout')

@section('title', 'Sign Up')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/signups.css') }}">
@endsection

@section('content')
<section class="container">
    <div class="d-flex justify-content-center align-items-center">
        <div class="signup-wrapper poppins-medium">
            <a class="d-flex justify-content-center align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('Images/scholris-dark.png') }}" class="navbar-logo" alt="Scholris" height="50" width="200" />
            </a>
            <h4 class="d-flex justify-content-center align-items-center mt-2 mb-5">
                SignUp
            </h4>
            <form>
                <div class="row g-5">
                    <div class="col-lg-6 col-sm-12">
                        <h5 class="mb-3">Basic Info</h5>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="fname" placeholder="Full Name" required />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Phone Number</label>
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
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth" required />
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="gender" required>
                                <option value="" disabled selected>Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="permanent-address" class="form-label">Permanent Address</label>
                            <input type="text" class="form-control" id="permanent-address" name="paddress" placeholder="Permanent Address" required />
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="same-address" />
                            <label class="form-check-label" for="same-address">Temporary address same as permanent address?</label>
                        </div>
                        <div class="mb-3">
                            <label for="temporary-address" class="form-label">Temporary Address</label>
                            <input type="text" class="form-control" id="temporary-address" name="taddress" placeholder="Temporary Address" required />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <h5 class="mb-3">Legals</h5>
                        <div class="mb-3">
                            <label for="document-type" class="form-label">Type of Document</label>
                            <select class="form-select" id="document-type" name="doctype" required>
                                <option value="" disabled selected>Select Document Type</option>
                                <option value="citizen">Citizenship</option>
                                <option value="birth-certificate">Birth Certificate</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="document-no" class="form-label">Document No.</label>
                            <input type="text" class="form-control" id="document-no" name="docno" placeholder="Document No." required />
                        </div>
                        <div class="mb-3">
                            <label for="document-upload" class="form-label">Upload Document</label>
                            <input type="file" class="form-control" id="document-upload" name="docup" required />
                        </div>

                        <h5 class="mb-3">Academics</h5>
                        <div class="mb-3">
                            <label for="gpa" class="form-label">GPA in Previous Year/Semester</label>
                            <input type="text" class="form-control" id="gpa" name="gpa" placeholder="GPA in Previous Year/Semester" required />
                        </div>
                        <div class="mb-3">
                            <label for="marksheet-upload" class="form-label">Marksheet of Previous Year/Semester</label>
                            <input type="file" class="form-control" id="marksheet-upload" name="marksheet-upload" />
                        </div>

                        <h5 class="mb-3">Others</h5>
                        <div class="mb-3">
                            <label for="personal-statement" class="form-label">Personal Statements</label>
                            <input type="file" class="form-control" id="personal-statement" name="personal_statement" required />
                        </div>
                        <div class="mb-3">
                            <label for="supporting-documents" class="form-label">Supporting Documents</label>
                            <input type="file" class="form-control" id="supporting-documents" name="supporting_documents" />
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="military-personal" name="military_personal" required />
                            <label class="form-check-label" for="military-personal">Are you son/daughter of military personal (retired/on duty)?</label>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="government-school" name="government_school" required />
                            <label class="form-check-label" for="government-school">Are/were you student of government school/college?</label>
                        </div>
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
                        Already a User? <a href="{{ url('login') }}">Login</a>
                    </div>
                    <div class="text-center">
                        Are you an organization? <a href="{{ url('org_signup') }}">Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
