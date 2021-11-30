<?php


use App\Http\Controllers\Admin\HomeControler;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;



// use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;

// use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\StaterkitController;
// use App\Http\Controllers\LanguageController;
//-----------------------





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

/* Route::get('/', function () {
    return view('welcome');
    //return view('home');
});

 */

/* Route::group(['middleware' => 'auth:admin'], function () {

    Route::get('/', [HomeControler::class, 'index'])->name('home');
}); */
// Route::group(['middleware' => 'guest:admin'], function () {

//     Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
//     Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login');
// });

Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/login', 'auth.auth-login')->name('login');

    //----------
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::view('/login', 'auth.login')->middleware('guest:admin')->name('login');

        $limiter = config('fortify.limiters.login');

        Route::post('/login', [AuthenticatedSessionController::class, 'store'])
            ->middleware(array_filter([
                'guest:admin',
                $limiter ? 'throttle:' . $limiter : null,
            ]));

        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
            ->middleware('auth:admin')
            ->name('logout');

        Route::view('/home', 'home')->middleware('auth:admin')->name('home');
    });
    //-----
});
