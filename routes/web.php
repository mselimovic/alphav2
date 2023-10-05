<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index'])->name('homepage.index');
Route::get('/about', [PagesController::class, 'about'])->name('pages.about');
Route::get('/services', [PagesController::class, 'services'])->name('pages.services');
Route::get('/projects', [PagesController::class, 'projects'])->name('pages.projects');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
Route::get('/faq', [PagesController::class, 'faq'])->name('pages.faq');
Route::get('/privacy', [PagesController::class, 'privacy'])->name('pages.privacy');