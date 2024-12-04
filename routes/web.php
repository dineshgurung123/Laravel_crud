<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;


Route::get('/', [ContactsController::class, 'index'])->name('contacts.index');

 Route::post('/contact/add', [ContactsController::class, 'store'])->name('contacts.store');


Route::get('/contact/edit/{id}', [ContactsController::class, 'edit'])->name('contacts.edit');

Route::post('contact/update/{id}', [ContactsController::class, 'update'])->name('contacts.update');

Route::get('contact/delete/{id}', [ContactsController::class, 'delete'])->name('contacts.delete');
