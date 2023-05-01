<?php

use App\Http\Controllers\InscrirController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\AtelierController;
use App\Http\Controllers\EvenementController;

// use App\Http\Middleware\admin;


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
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/login', function () {
    return view('auth.login');
});
Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', [LoginController::class, 'index']);
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Route pour l'ajout d'une activité
Route::post('/ajouter_activite', [ActiviteController::class, 'ajouter'])->name('ajouter_activite');

// Route pour l'ajout d'un atelier
Route::post('/ajouter_atelier', [AtelierController::class, 'ajouter'])->name('ajouter_atelier');

// Route pour l'ajout d'un événement
Route::post('/ajouter_evenement', [EvenementController::class, 'ajouter'])->name('ajouter_evenement');
