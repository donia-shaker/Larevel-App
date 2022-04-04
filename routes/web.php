<?php

use App\Http\Controllers\aboutUsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/about_us',[ aboutUsController::class,'showPage']);

Route::get('/index', function () {
    return view('index');
});

Route::get('/contact_us', function () {
    return view('contact-us');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/jobs', function () {
    return view('job');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/membership', function () {
    return view('membership');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/sign_up', function () {
    return view('sign-up');
});

Route::get('/skills', function () {
    return view('skills');
});
