<?php

use App\Http\Controllers\InscrirController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PDFController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index']);
Route::get('/inscrir', [InscrirController::class, 'create']);
Route::post('/inscrir', [PDFController::class, 'generatePDF'])->name('inscrir.store');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
