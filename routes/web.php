<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/shop', [PagesController::class, 'shop'])->name('shop');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

//Etudiant
Route::get('/etudiant/all', [EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('/etudiant/add', [EtudiantController::class, 'add'])->name('etudiant.add');
Route::post('/etudiant/store', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::get('/etudiant/{id}', [EtudiantController::class, 'show'])->name('etudiant.show');
Route::get('/etudiant/delete/{id}', [EtudiantController::class, 'delete'])->name('etudiant.delete');
Route::post('/etudiant/update', [EtudiantController::class, 'update'])->name('etudiant.edit');
