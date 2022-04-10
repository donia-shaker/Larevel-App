<?php

use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\jobsController;

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
    return view('front.index');
});

Route::get('/contact_us', function () {
    return view('front.contact-us');
});

Route::get('/courses', function () {
    return view('customer.courses');
});

Route::get('/cv', function () {
    return view('front.cv');
});

Route::get('/dashboard', function () {
    return view('customer.dashboard');
});

Route::get('/details', function () {
    return view('front.details');
});

Route::get('/education', function () {
    return view('customer.education');
});

Route::get('/jobs', function () {
    return view('front.job');
});

Route::get('/login', function () {
    return view('front.login');
});

Route::get('/membership', function () {
    return view('front.membership');
});

Route::get('/services', function () {
    return view('front.services');
});

Route::get('/sign_up', function () {
    return view('front.sign-up');
});

Route::get('/skills', function () {
    return view('customer.skills');
});


// Admin Show All Jobs
Route::get('/all_Jobs',[jobsController::class ,'showPage']);
Route::get('/add_Job',[jobsController::class,'addJobs'])->name('add_Job');
Route::get('/edit_Job',[jobsController::class,'editJobs'])->name('edit_Job');
Route::post('/store_Job',[jobsController::class,'storeJobs'])->name('store_Job');
Route::post('/update_Job',[jobsController::class,'updateJobs'])->name('update_Job');

