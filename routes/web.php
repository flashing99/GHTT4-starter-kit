<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StaterkitController;
use App\Http\Controllers\LanguageController;
//-----------------------

use App\Http\Controllers\Auth\AuthenticationHTTController;
use App\Http\Controllers\HomeController;

// mailling

use App\Mail\InscriptionMail;
use Illuminate\Support\Facades\Mail;


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

/* By Mohamed ++++++++++++++++++++++++++++++++++++++++++++++*/

// Route::get('/', function () {
//     return view('test');
// })->middleware('auth');
Route::get('/', function () {
    return view('welcome');
});


//! Route for mailing
Route::get('/email', function () {

    Mail::to('enafor99@gmail.com')->send(new InscriptionMail());

    return new InscriptionMail();
});



Route::view('/home', 'home')->middleware('auth');
// Route::get('/', function () {
//     return view('home');
// });
//Route::get('/register', [AuthenticationHTTController::class, 'register'])->name('register');


//Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/home', 'HomeController@index')->name('home');



// Route::get('/auth-login', [AuthenticationHTTController::class, 'login_form'])->name('login');
// Route::post('/auth-login', [AuthenticationHTTController::class, 'login'])->name('login');
// Route::get('/auth-register', [AuthenticationHTTController::class, 'register_form'])->name('register');
// Route::post('/auth-register', [AuthenticationHTTController::class, 'register'])->name('register');


Route::group(['prefix' => 'auth-admin'], function () {

    // Route::get('/', function () {
    //     return view('welcome');
    // });

    Route::get('/', [AuthenticationHTTController::class, 'login_form'])->name('dashboard-admin');
    Route::get('login-form', [AuthenticationHTTController::class, 'login_form'])->name('auth-login-form');


    // Route::get('login-cover', [AuthenticationController::class, 'login_cover'])->name('auth-login-cover');
    // Route::get('register-basic', [AuthenticationController::class, 'register_basic'])->name('auth-register-basic');
    // Route::get('register-cover', [AuthenticationController::class, 'register_cover'])->name('auth-register-cover');
    // Route::get('forgot-password-basic', [AuthenticationController::class, 'forgot_password_basic'])->name('auth-forgot-password-basic');
    // Route::get('forgot-password-cover', [AuthenticationController::class, 'forgot_password_cover'])->name('auth-forgot-password-cover');
    // Route::get('reset-password-basic', [AuthenticationController::class, 'reset_password_basic'])->name('auth-reset-password-basic');
    // Route::get('reset-password-cover', [AuthenticationController::class, 'reset_password_cover'])->name('auth-reset-password-cover');
    // Route::get('verify-email-basic', [AuthenticationController::class, 'verify_email_basic'])->name('auth-verify-email-basic');
    // Route::get('verify-email-cover', [AuthenticationController::class, 'verify_email_cover'])->name('auth-verify-email-cover');
    // Route::get('two-steps-basic', [AuthenticationController::class, 'two_steps_basic'])->name('auth-two-steps-basic');
    // Route::get('two-steps-cover', [AuthenticationController::class, 'two_steps_cover'])->name('auth-two-steps-cover');
    // Route::get('register-multisteps', [AuthenticationController::class, 'register_multi_steps'])->name('auth-register-multisteps');
    // Route::get('lock-screen', [AuthenticationController::class, 'lock_screen'])->name('auth-lock_screen');
});

////////////////////////////////
/* 
//Route::get('/', [StaterkitController::class, 'home'])->name('home');
Route::get('home', [StaterkitController::class, 'home'])->name('home');
Route::post('home', [AuthenticationHTTController::class, 'logout'])->name('logout');


// Route Components
Route::get('layouts/collapsed-menu', [StaterkitController::class, 'collapsed_menu'])->name('collapsed-menu');
Route::get('layouts/full', [StaterkitController::class, 'layout_full'])->name('layout-full');
Route::get('layouts/without-menu', [StaterkitController::class, 'without_menu'])->name('without-menu');
Route::get('layouts/empty', [StaterkitController::class, 'layout_empty'])->name('layout-empty');
Route::get('layouts/blank', [StaterkitController::class, 'layout_blank'])->name('layout-blank');


// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);
 */