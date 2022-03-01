<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;



/**
 * Frontend controller 
 */
Route::get('/', [FrontendController::class, 'showHomePage']) -> name('home.page');
Route::get('/menu', [FrontendController::class, 'showMenuPage']) -> name('menu.page');
Route::get('/blog', [FrontendController::class, 'showblogPage']) -> name('blog.page');
Route::get('/staff', [FrontendController::class, 'showStaffPage']) -> name('staff.page');




/**
 * Backend routes 
 */
Route::get('dashboard', [DashboardController::class, 'showDashboard']) -> name('dashboard.index');
Route::resource('staff', StaffController::class);












