<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CareerController;

// ====================
// 🔐 Auth Routes
// ====================
Auth::routes();
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// ====================
// 🌐 Public Views
// ====================
Route::get('/', fn() => view('index'));
Route::get('/home', fn() => view('index'))->name('home');
Route::get('/about', fn() => view('aboutUs'));
Route::get('/contact', fn() => view('contact'));
Route::get('/more', fn() => view('more'));
Route::get('/news', fn() => view('news'));
Route::get('/platform', fn() => view('platform'));

// ====================
// 🧑 Career Routes (User & Admin)
// ====================

Route::get('/career', [CareerController::class, 'index'])->name('career.home');
Route::post('/career', [CareerController::class, 'store'])->name('career.store');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/career', [CareerController::class, 'index'])->name('admin.career.index');
    Route::post('/admin/career/{id}/accept', [CareerController::class, 'accept'])->name('admin.career.accept');
    Route::post('/admin/career/{id}/reject', [CareerController::class, 'reject'])->name('admin.career.reject');
    Route::delete('/admin/career/{id}', [CareerController::class, 'delete'])->name('admin.career.delete');
});

// ====================
// 🗂️ Event Organizer Routes
// ====================
Route::get('/our-services', [EventController::class, 'index'])->name('our-services');
Route::post('/event', [EventController::class, 'store']);
Route::get('/api/events', [EventController::class, 'getEvents']);
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
Route::delete('/events/bulk-delete', [EventController::class, 'bulkDelete']);

// ====================
// 🛠️ Admin Only
// ====================
Route::get('/admin/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard')->middleware('auth');