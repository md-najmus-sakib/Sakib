<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PortfolioSettingController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ProfessionalSkillController;
use App\Http\Controllers\Admin\SocialLinkController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthenticationController::class, 'login']);
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');

Route::get('/registration', function () {
    return view('auth.registration');
})->name('registration');

Route::post('/registration', [AuthenticationController::class, 'register']);

// Protected Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['admin'])->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/preview', [AdminController::class, 'preview'])->name('preview');
    
    // Portfolio Settings
    Route::resource('portfolio-settings', PortfolioSettingController::class);
    
    // Education Management
    Route::resource('education', EducationController::class);
    
    // Professional Skills Management
    Route::resource('professional-skills', ProfessionalSkillController::class);
    
    // Social Links Management
    Route::resource('social-links', SocialLinkController::class);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
