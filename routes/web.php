<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [PublicController::class, 'home'])->name ('home');
Route::get('/articles/create', [ArticleController::class, 'create'])->name ('articles.create');
Route::post('/article/store', [ArticleController::class,'store'])->name('articles.store');
Route::get('/articles/{article}/show',[ArticleController::class,'show'])->name('articles.show');
Route::get('/articles/{category}/index',[ArticleController::class,'articlesForCategory'])->name('articles.category');
Route::get('/work-with-as', [PublicController::class, 'workWithUs'])->name('work.with.us');
Route::post('/user/send-role-request',[PublicController::class,'sendRoleRequest'])->name('user.role.request');
route::middleware('admin')->group(function(){
Route::get('/admin/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
});

