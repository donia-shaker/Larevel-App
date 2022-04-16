<?php

use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\jobsController;
use App\Http\Controllers\settingsController;
use App\Http\Controllers\UserController;
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

Route::get('/about_us',[ aboutUsController::class,'showPage'])->name('about_us');

Route::get('/index', function () {
    return view('front.index');
})->name('index');

Route::get('/contact_us', function () {
    return view('front.contact-us');
});

Route::get('/courses', function () {
    return view('customer.courses');
});


Route::get('/details', function () {
    return view('front.details');
});


Route::get('/jobs', function () {
    return view('front.job');
});

Route::get('/membership', function () {
    return view('front.membership');
});

Route::get('/services', function () {
    return view('front.services');
});


// login and register
Route::get('/sign_up', [UserController::class,'showRegisterPage']);
Route::post('/register', [UserController::class,'register'])->name('register');
Route::get('/login', [UserController::class,'showloginPage'])->name('login');
Route::post('/do_login', [UserController::class,'login'])->name('do_login');


Route::group(['prefix'=>'admin_panel'],function(){

	Route::group(['middleware'=>['auth','role:admin']],function(){
        // Admin Show All Jobs


   });
   	Route::group(['middleware'=>['auth','role:client']],function(){
           Route::get('/education', function () {
    return view('customer.education');
});
Route::get('/skills', function () {
    return view('customer.skills');
});
Route::get('/cv', function () {
    return view('front.cv');
});

Route::get('/dashboard', function () {
    return view('customer.dashboard');
})->name('dashboard');

});
});

	Route::get('/logout',[AuthController::class,'logout'])->name('logout');

         Route::get('/all_Jobs',[jobsController::class ,'showPage'])->name('all_Jobs');
        Route::get('/add_Job',[jobsController::class,'addJobs'])->name('add_Job');
        Route::get('/edit_Job',[jobsController::class,'editJobs'])->name('edit_Job');
        Route::post('/store_Job',[jobsController::class,'storeJobs'])->name('store_Job');
        Route::post('/update_Job',[jobsController::class,'updateJobs'])->name('update_Job');

// generate role
Route::get('/generate_roles',[settingsController::class,'generateRoles'])->name('generate_roles');



