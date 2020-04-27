<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/blank-page', function () {
    return view('blank-page');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/booking-success', function () {
    return view('booking-success');
});
Route::get('/calendar', function () {
    return view('calendar');
});
Route::get('/change-password', function () {
    return view('change-password');
});
Route::get('/chat', function () {
    return view('chat');
});
Route::get('/chat-doctor', function () {
    return view('chat-doctor');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/components', function () {
    return view('components');
});
Route::get('/doctor-change-password', function () {
    return view('doctor-change-password');
});
Route::get('/doctor-dashboard', function () {
    return view('doctor-dashboard');
});
Route::get('/doctor-profile', function () {
    return view('doctor-profile');
});
Route::get('/doctor-profile-settings', function () {
    return view('doctor-profile-settings');
});
Route::get('/doctor-register', function () {
    return view('doctor-register');
});
Route::get('/edit-billing', function () {
    return view('edit-billing');
});
Route::get('/edit-prescription', function () {
    return view('edit-prescription');
});
Route::get('/favourites', function () {
    return view('favourites');
});
Route::get('/forgot-password', function () {
    return view('forgot-password');
});
Route::get('/index-2', function () {
    return view('index-2');
});
Route::get('/invoice-view', function () {
    return view('invoice-view');
});
Route::get('/invoices', function () {
    return view('invoices');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/my-patients', function () {
    return view('my-patients');
});
Route::get('/patient-dashboard', function () {
    return view('patient-dashboard');
});
Route::get('/patient-profile', function () {
    return view('patient-profile');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/profile-settings', function () {
    return view('profile-settings');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/reviews', function () {
    return view('reviews');
});
Route::get('/schedule-timings', function () {
    return view('schedule-timings');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/social-media', function () {
    return view('social-media');
});
Route::get('/term-condition', function () {
    return view('term-condition');
});
Route::get('/video-call', function () {
    return view('video-call');
});
Route::get('/voice-call', function () {
    return view('voice-call');
});
Route::get('/appointments', function () {
    return view('appointments');
});

