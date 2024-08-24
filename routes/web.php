<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/aboutus', function () {
//     return view('aboutus');
// })->name('aboutus');

// Route::get('/contactus', function () {
//     return view('contactus');
// })->name('contactus');

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// Route::get('/std_signup', function () {
//     return view('std_signup');
// })->name('std_signup');

// Route::get('/org_signup', function () {
//     return view('org_signup');
// })->name('org_signup');

Route::get('/', [PageController::class, 'index']);
Route::get('/aboutus', [PageController::class, 'aboutUs']);
Route::get('/contactus', [PageController::class, 'contactUs']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/org_signup', [PageController::class, 'orgSignup']);
Route::get('/std_signup', [PageController::class, 'stdSignup']);
