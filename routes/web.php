<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PermissionRoleController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeAboutController;
use App\Http\Controllers\WelcomeHeaderController;
use App\Http\Controllers\WelcomePageController;
use App\Http\Controllers\WelcomeProjectController;
use App\Models\PermissionRole;
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

Route::get('/', [WelcomePageController::class, 'index'])->name('welcome');
//
Auth::routes();
//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
///**->middleware('can:superAdmin') */

Route::group(['prefix' => 'dashboard', 'middleware' => 'Admin'], function () {
    //
    Route::get('/', [dashboardController::class, 'index'])->name('dashboard');
    //
    Route::resource('users', UserController::class);
    //
    Route::prefix('cms')->group(function () {
        //
        Route::get('/', [dashboardController::class, 'cms'])->name('cms');
        //
        Route::resource('permissions', PermissionController::class);
        Route::post('permission_roles', [RoleController::class, 'permission_roles'])->name('role.permission_roles');
        Route::get('permission_roles', [PermissionRoleController::class, 'index'])->name('permission_roles.index');
        Route::post('permission/by/role', [RoleController::class, 'getByRole'])->name('permission_byRole');
        //
        Route::resource('roles', RoleController::class);
        //
        Route::prefix('welcome')->group(function () {
            Route::get('/', [dashboardController::class, 'welcome'])->name('cms.welcome');
            //
            Route::resource('headers', WelcomeHeaderController::class);
            Route::resource('projects', WelcomeProjectController::class);
            Route::resource('about', WelcomeAboutController::class);
            Route::resource('contact_us', ContactUsController::class);
        });
    });
});
