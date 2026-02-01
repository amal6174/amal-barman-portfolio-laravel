<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;



Route::get('/',[PortfolioController::class,'home']);
Route::get('/about',[PortfolioController::class, 'about']);
Route::get('/skills',[PortfolioController::class, 'skills']);
Route::get('/projects',[PortfolioController::class, 'projects']);
Route::get('/contact',[PortfolioController::class, 'contact']);

Route::post('/contact',[ContactController::class,'store']);


// admin Auth
Route::get('/admin/login',[AuthController::class,'loginForm']);
Route::post('/admin/login',[AuthController::class,'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Route::get('/admin/logout',[AuthController::class,'logout'])->name('admin.logout');

// Admin Panel

Route::middleware('adminauth')->prefix('admin')->group(function(){

      Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');    
      Route::get('/projects',[DashboardController::class,'projects'])->name('admin.projects');
      Route::get('/messages',[DashboardController::class, 'messages'])->name('admin.messages');
      Route::get('/skills',[DashboardController::class, 'skills'])->name('admin.skills');
      
      // resource route for  admin project 
      
    Route::get('/projects/create', [ProjectController::class, 'create'])
        ->name('admin.projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])
        ->name('admin.projects.store');
});
