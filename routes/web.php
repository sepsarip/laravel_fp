<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

Route::get('/', function () {
    return view('welcome');
});

//route resource for products
Route::resource('/products', \App\Http\Controllers\ProductController::class);

//route for generate pdf
// Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
Route::get('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');