@extends('layout')

@section('title', 'Contact Us')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/contactus.css') }}">
@endsection

@section('content')
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-12 col-md-6 left-column">
            <h1 class="left-column-text-top">Contact Us</h1>
            <p class="left-column-after-heading mt-3">Email, call, or complete the form to learn how<br> Scholris can help you out.</p>
            <div class="contact-info">
                <h4 class="contact-details">Email Address</h4>
                <a href="mailto:info.scholris@gmail.com" class="text-decoration-none">info.scholris@gmail.com</a>
                <h4 class="contact-details">Address</h4>
                <a href="https://maps.app.goo.gl/Ximihfc8gaPmtmCV7" class="text-decoration-none">Kathmandu, Nepal</a>
                <h4 class="contact-details">Phone Number</h4>
                <a href="tel:9779818238323" class="text-decoration-none">9818238323</a>
            </div>
        </div>
        <div class="col-12 col-md-6 right-column poppins-medium">
            <div class="right-column-text">
                <h1 class="right-column-top">Get in touch</h1>
                <p class="right-column-after-heading mb-3 mt-3">You can reach us anytime</p>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact No.</label>
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact No." required />
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" placeholder="Message" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="primary-btn-filled w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
