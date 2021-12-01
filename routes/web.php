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
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Mail;
use Symfony\Contracts\Service\Attribute\Required;

use App\Http\Controllers\Admin\HomeAdminControler;
use App\Http\Controllers\Manager\HomeManagerControler;


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
/* 
Route::get('/test', function () {
    return view('test');
})->name('test');
Route::get('/files/test', function () {
    return view('files.test');
})->name('test2');



Route::get('/files/form-layout', function () {
    return view('files.form-layout');
})->name('flyout');

Route::get('/files/form-select', function () {
    return view('files.form-select');
})->name('fselect');


// Route::get('/', function () {
//     return view('home');
// });
 */
/*
Route::get('/', function () {
    return view('welcome');
    //return view('home');
});

Route::view('/home', 'home')->Middleware('auth');
 Route::group(['middleware' => 'verified'], function () {

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/filiales', [HomeController::class, 'index']);
    });
}); */

/* Route::view('/home', 'home')->middleware('auth'); */




Route::get('/home', [HomeController::class, 'index'])->name('home');



//--- MANEGRs routes ----------------------------------------------------------------
Route::prefix('manager')->name('manager.')->middleware('auth')->group(function () {

    //  Route::view('/home', 'admin.index')->name('home');
    Route::get('manager.index', [HomeManagerControler::class, 'index'])->name('manager.home');
    //!----------------- Aboube route needs to be verified ------------------------------------------------------------------


    //!-----------------------------------------------------------------------------------
});
Route::view('/manager/index', 'home')->middleware(['auth', 'verified']);

Route::get('/', function () {
    return view('welcome');
});
//---ADMINISTRATOR routes-----------------------------------------------------------


//  Route::view('/home', 'admin.index')->name('home');
Route::get('admin.index', [HomeAdminControler::class, 'index'])->name('admin.home');


/*

require __DIR__ . '/admin.php';

*/




//!+++++++++++++++++++++++++++++++++++++++++++++++++
/* Route::group(['prefix' => 'filiales', 'middleware' => 'auth'], function () {
    // return view('index');
    return view('index');
}); */
//Auth::routes(['verify' => true]);

/* Route::group(['prefix' => 'filiales', 'middleware' => 'auth'], function () {
    // return view('index');
    return view('admin.index');
}); */
/* 
Route::group(['middleware' => 'auth'], function () {
    // return view('index');
    return view('filiales.index');
});
 */

//Route::view('/', 'index')->middleware(['auth', 'verified']);


//! Route for mailing
/* 
Route::get('/email', function () {

   Mail::to('enafor99@gmail.com')->send(new InscriptionMail());

    return new InscriptionMail(); 
});
*/

/* Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'role:filiale', 'prefix' => 'filiale', 'as' => 'filiale.'], function () {
        Route::resource('lessons', \App\Http\Controllers\Students\LessonController::class);
    });
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    });
    // Route::group(['middleware' => 'role:manage-user', 'prefix' => 'admin', 'as' => 'manag-users.'], function () {
    //     Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    // });
});
 */

//Route::get('/register', [AuthenticationHTTController::class, 'register'])->name('register');


//Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/home', 'HomeController@index')->name('home');



// Route::get('/auth-login', [AuthenticationHTTController::class, 'login_form'])->name('login');
// Route::post('/auth-login', [AuthenticationHTTController::class, 'login'])->name('login');
// Route::get('/auth-register', [AuthenticationHTTController::class, 'register_form'])->name('register');
// Route::post('/auth-register', [AuthenticationHTTController::class, 'register'])->name('register');


Route::group(['prefix' => 'auth-admin000000'], function () {

    // Route::get('/', function () {
    //     return view('welcome');
    // });

    // Route::get('/', [AuthenticationHTTController::class, 'login_form'])->name('dashboard-admin');
    // Route::get('login-form', [AuthenticationHTTController::class, 'login_form'])->name('auth-login-form');


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