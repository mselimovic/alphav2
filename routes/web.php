<?php

use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Session;

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
Route::get('/request', [PagesController::class, 'request'])->name('pages.request');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
Route::get('/faq', [PagesController::class, 'faq'])->name('pages.faq');
Route::get('/privacy', [PagesController::class, 'privacy'])->name('pages.privacy');
Route::get('/request/thank-you', [PagesController::class, 'thanks'])->name('pages.thankYou')->middleware('check_form_submission');
Route::post('/submit-form', [QuestionController::class, 'submitForm'])->name('submit.form');
// Route::get('/lang/{locale}', function ($lang) {
//     Session::put('locale', $lang);
//     return redirect()->back();
// })->name('lang');
Route::get('/lang/{locale}', function ($lang) {
    Session::put('locale', $lang);
    return redirect()->back();
})->name('lang');

// Route::get('/lang/{locale}', [LangController::class, 'setLocale'])->name('setLocale');

