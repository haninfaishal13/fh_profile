<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backsite\BlogController;
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\ProfileController;
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
})->name('welcome');

// Route::group(['prefix' => 'auth'], function() {
//     Route::post('login', [AuthController::class, 'login']);
//     Route::post('register', [AuthController::class, 'register']);
// });

Route::group(['prefix' => 'backsite'], function() {
    Route::group(['prefix' => 'auth'], function() {
        Route::get('/', [AuthController::class, 'auth_page']);
        Route::post('login', [AuthController::class, 'login']);
        // Route::post('register', [AuthController::class, 'register']);
    });
    Route::group(['middleware'=>'auth'], function() {
        Route::post('auth/logout', [AuthController::class, 'logout'])->name('backsite.auth.logout');

        Route::group(['prefix' => 'dashboard'], function() {
            Route::get('/', [DashboardController::class, 'index'])->name('backsite.dashboard');
        });
        Route::group(['prefix' => 'profile'], function() {
            Route::get('/', [ProfileController::class, 'index'])->name('backsite.profile');
            Route::get('data', [ProfileController::class, 'getData'])->name('backsite.profile.getData');
            Route::get('profileData', [ProfileController::class, 'getProfileData'])->name('backsite.profile.getProfileData');
            Route::get('skillData', [ProfileController::class, 'getSkillData'])->name('backsite.profile.getSkillData');
            Route::get('linkData', [ProfileController::class, 'getLinkData'])->name('backsite.profile.getLinkData');
            Route::post('/', [ProfileController::class, 'store'])->name('backsite.profile.store');
        });
        Route::group(['prefix' => 'blog'], function() {
            Route::get('/', [BlogController::class, 'index'])->name('backsite.blog');
            Route::post('/', [BlogController::class, 'store'])->name('backsite.blog.store');
        });
    });
});
