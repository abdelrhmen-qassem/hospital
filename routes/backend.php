<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// Route::resource("/dashboard_admin",DashboardController::class);


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


        Route::get('/dashboard/user', function () {
            return view('dashboard.user.dashboard');
        })->middleware(['auth',])->name('dashboard.user');


        Route::get('/dashboard/admin', function () {
            return view('dashboard.admin.dashboard');
        })->middleware(['auth:admin',])->name('dashboard.admin');

        require __DIR__.'/auth.php';


        // require __DIR__.'/auth.php';


    });
