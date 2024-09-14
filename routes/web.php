<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;


// Route for the home page, redirecting to the items list
Route::get('/', [ItemController::class, 'index'])->name('items.index');

// Route for showing a form to create a new item
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');

// Route for storing a new item
Route::post('/items', [ItemController::class, 'store'])->name('items.store');

// Route for displaying a single item
Route::get('/items/{item}', [ItemController::class, 'show'])->name('items.show');

// Route for showing a form to edit an existing item
Route::get('/items/{item}/edit', [ItemController::class, 'edit'])->name('items.edit');

// Route for updating an existing item
Route::put('/items/{item}', [ItemController::class, 'update'])->name('items.update');

// Route for deleting an item
Route::delete('/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');
