<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;


/*
|--------------------------------------------------------------------------
| Public Website
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/about', [AboutController::class, 'index'])
    ->name('about');

Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');

Route::view('/loans', 'loans')
    ->name('loans');

Route::view('/services', 'services')
    ->name('services');

Route::view('/membership', 'membership')
    ->name('membership');

Route::view('/documents', 'documents')
    ->name('documents');


/*
|--------------------------------------------------------------------------
| Public News
|--------------------------------------------------------------------------
*/

Route::get('/news', [NewsController::class, 'index'])
    ->name('news');

Route::get('/news/{news:slug}', [NewsController::class, 'show'])
    ->name('news.show');


/*
|--------------------------------------------------------------------------
| Admin CMS
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | Guest Admin Routes
        |--------------------------------------------------------------------------
        */

        Route::middleware('guest:admin')->group(function () {

            Route::get('/login', [AuthController::class, 'showLogin'])
                ->name('login');

            Route::post('/login', [AuthController::class, 'login'])
                ->name('login.submit');

        });


        /*
        |--------------------------------------------------------------------------
        | Authenticated Admin Routes
        |--------------------------------------------------------------------------
        */

        Route::middleware('auth:admin')->group(function () {

            /*
            |--------------------------------------------------------------------------
            | Admin Dashboard
            |--------------------------------------------------------------------------
            */

            Route::get('/dashboard', function () {
                return view('admin.dashboard');
            })->name('dashboard');


            /*
            |--------------------------------------------------------------------------
            | News Management
            |--------------------------------------------------------------------------
            */

            Route::resource('/news', AdminNewsController::class);


            /*
            |--------------------------------------------------------------------------
            | Admin Logout
            |--------------------------------------------------------------------------
            */

            Route::post('/logout', [AuthController::class, 'logout'])
                ->name('logout');

        });

    });


/*
|--------------------------------------------------------------------------
| Default User Authentication
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    Route::view('/dashboard', 'dashboard')
        ->name('dashboard');

});


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/

require __DIR__ . '/settings.php';
