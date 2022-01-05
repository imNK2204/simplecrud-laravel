<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Route::get('/', function () {

//     return view('welcome');
// });
Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('/products', [MainController::class, 'products'])->name('products');
Route::get('/addproduct', [MainController::class, 'addproduct'])->name('addproduct');
Route::post('/createproduct', [MainController::class, 'createproduct'])->name('createproduct');
Route::get('/edit/{id}', [MainController::class, 'edit'])->name('edit');
Route::post('/editproduct', [MainController::class, 'editproduct'])->name('editproduct');
Route::get('/delete/{id}', [MainController::class, 'delete'])->name('delete');
