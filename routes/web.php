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

            //? CATEGORIE
Route::get("/category/name/{category}", [CategoryController::class, "show"])->name("category.show");

            //? REVISORE
Route::get("/revisor/index", [RevisorController::class,'index'])->name('revisor.index');
Route::patch('/revisor/accept/{article}' , [RevisorController::class , 'revisor_accept'])->name('revisor.accept');
Route::patch('/revisor/decline/{article}' , [RevisorController::class , 'revisor_decline'])->name('revisor.decline');
