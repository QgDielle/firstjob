<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');


//? ARTICOLI
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/profile/{user_id}', [ArticleController::class, 'article_profile'])->name('article.profile');
Route::delete('/article/delete/{article}', [ArticleController::class, 'destroy'])->name('article.delete');


//? CATEGORIE
Route::get("/category/name/{category}", [CategoryController::class, "show"])->name("category.show");

//? REVISORE
Route::get("/revisor/index", [RevisorController::class, 'index'])->name('revisor.index');
//? ACCETTA / RIFIUTA articolo
Route::patch('/revisor/accept/{article}', [RevisorController::class, 'revisor_accept'])->name('revisor.accept');
Route::patch('/revisor/decline/{article}', [RevisorController::class, 'revisor_decline'])->name('revisor.decline');
Route::patch('/revisor/suspend/{article}', [RevisorController::class, 'revisor_suspend'])->name('revisor.suspend');
Route::get('/revisor/recap', [RevisorController::class, 'revisor_recap'])->name('revisor.recap');
//?  LAVORA CON NOI
Route::get('/revisor/request', [RevisorController::class, 'revisor_request'])->name('revisor.request');
Route::get('/revisor/make/{user}', [RevisorController::class, 'revisor_make'])->name('make.revisor');
Route::get("/revisor/contact-us", [RevisorController::class, 'revisor_contactus'])->name('revisor.contactus');
Route::post("/revisor/submit", [RevisorController::class, 'revisor_submit'])->name('revisor.submit');

//? RICERCA ANNUNCI
Route::get("/ricerca/annuncio", [ArticleController::class, "searchArticle"])->name("article.search");

//? CAMBIA LINGUA
Route::post('/lingua/{lang}', [ArticleController::class, "setLanguage"])->name('set_language_locale');
