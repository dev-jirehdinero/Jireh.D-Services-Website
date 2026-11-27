<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\InquiryController;

Route::get('/', function () {
    return view('welcome');
});

// Test Routes
Route::get('/greeting', function () {
    return 'Hello World';
});

// Public Website Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');

// Contact Form (Show & Submit)
Route::get('/contact', [InquiryController::class, 'create'])->name('contact.create');
Route::post('/contact', [InquiryController::class, 'store'])->name('contact.store');

// Admin Inbox (View & Delete)
Route::get('/inquiries', [InquiryController::class, 'index'])->name('inquiries.index');
Route::delete('/inquiries/{inquiry}', [InquiryController::class, 'destroy'])->name('inquiries.destroy');
