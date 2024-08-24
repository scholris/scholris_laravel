<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index');
    }

    public function aboutUs() {
        return view('aboutus');
    }

    public function contactUs() {
        return view('contactus');
    }

    public function login() {
        return view('login');
    }

    public function orgSignup() {
        return view('org_signup');
    }

    public function stdSignup() {
        return view('std_signup');
    }
}
