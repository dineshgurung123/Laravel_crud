<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;


Route::get('/', [ContactsController::class, 'index'])->name('contacts.index');

 Route::post('/contact/add', [ContactsController::class, 'store'])->name('contacts.store');


Route::get('/contact/edit/{id}', [ContactsController::class, 'edit'])->name('contacts.edit');

Route::post('contact/update/{id}', [ContactsController::class, 'update'])->name('contacts.update');

Route::get('contact/delete/{id}', [ContactsController::class, 'delete'])->name('contacts.delete');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
