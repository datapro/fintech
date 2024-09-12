<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;





Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/career', [PagesController::class, 'career'])->name('career');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');


// Transaction Controller

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        $account = Auth::user()->account;
        return view('home', compact('account'));
    })->name('home');
    Route::post('/deposit', [TransactionController::class, 'deposit'])->name('deposit');
    Route::post('/withdraw', [TransactionController::class, 'withdraw'])->name('withdraw');
});


Auth::routes();

Route::get('/user/{id}/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdminController::class, 'index'])->middleware('admin')->name('admin.dashboard');

