<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::resource("/dashboard_admin",DashboardController::class);


Route::get('/dashboard/user', function () {
    return view('dashboard.user.dashboard');
})->middleware(['auth',])->name('dashboard.user');

require __DIR__.'/auth.php';
