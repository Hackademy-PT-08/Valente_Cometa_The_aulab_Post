<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

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
Route::get('/admin/{user}/set-revisor',[AdminController::class,'makeUserRevisor'])->name('admin.makeUserRevisor');
Route::get('/admin/{user}/set-admin',[AdminController::class,'makeUserAdmin'])->name('admin.makeUserAdmin');
Route::get('/admin/{user}/set-writer',[AdminController::class,'makeUserWriter'])->name('admin.makeUserWriter');
Route::get('/admin/{user}/remove-admin',[AdminController::class,'removeUserAdmin'])->name('admin.remove');
Route::get('/admin/{user}/remove-revisor',[AdminController::class,'removeUserRevisor'])->name('revisor.remove');
Route::get('/admin/{user}/remove-writer',[AdminController::class,'removeUserWriter'])->name('writer.remove');
});



route::middleware('writer')->group(function(){
Route::get('/article/create', [ArticleController::class,'create'])->name('article.create');
Route::get('/article/store',[ArticleController::class,'store'])->name('article.store');
});

Route::middleware('revisor')->group(function(){
    Route::get('/revisor/dashboard',[RevisorController::class,'revisorDashboard'])->name('revisor.dashboard');
    Route::get('/revisor/article/{article}/detail',[RevisorController::class,'articleDetail'])->name('revisor.detail');
    Route::get('/revisor/article/{article}/accept',[RevisorController::class,'acceptArticle'])->name('revisor.accept');;
    Route::get('/revisor/article/{article}/reject',[RevisorController::class,'rejectArticle'])->name('reject.detail');
});


