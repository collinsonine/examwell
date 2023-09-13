<?php
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

Route::controller(AuthController::class)->prefix('admin/')->name('admin.')->group(function(){
    Route::get('login', 'showloginform')->name('login');
});


Route::controller(AdminController::class)->prefix('admin/')->name('admin.')->middleware(['admin'])->group(function(){
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('settings', 'settings')->name('settings');
    Route::get('courses', 'courses')->name('courses');
    Route::get('view-course', 'viewcourse')->name('view.course');
});
