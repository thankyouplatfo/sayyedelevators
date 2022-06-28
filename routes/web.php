<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\WelcomeHeaderController;
use App\Models\welcomeHeader;
use Illuminate\Support\Facades\Auth;
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
//
Auth::routes();
//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
///**->middleware('can:superAdmin') */

Route::prefix('dashboard')->group(function () {
    Route::get('/', [dashboardController::class, 'index'])->name('dashboard');
    Route::prefix('cms')->group(function () {
        Route::get('/', [dashboardController::class, 'cms'])->name('cms');
        Route::prefix('welcome')->group(function () {
            Route::get('/', [dashboardController::class, 'welcome'])->name('cms.welcome');
            //
            Route::resource('hesder', WelcomeHeaderController::class)->name('cms.welcome.header');
        });
    });
});
