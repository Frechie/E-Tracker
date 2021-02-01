<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Category\CategoriesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [App\Http\Controllers\PagesController::class, 'index']);

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/categories', [App\Http\Controllers\Category\CategoryController::class, 'showCategory'])->name('category');

//Route::get('/add_category', [App\Http\Controllers\Category\CategoryController::class, 'showCatForm'])->name('displayCatForm');

//Route::post('/add_category', [App\Http\Controllers\Category\CategoryController::class, 'saveCategory'])->name('saveCatForm');

//Route::get('/edit_category/{id}', [App\Http\Controllers\Category\CategoryController::class, 'showCatUpdateForm'])->name('displayCatUpdateForm');

//Route::post('/edit_category/{id}', [App\Http\Controllers\Category\CategoryController::class, 'updateCategory'])->name('updateCategory');

//Route::get('/delete_category/{id}', [App\Http\Controllers\Category\CategoryController::class, 'showDeletionteForm']);

//Route::post('/delete_category/{id}', [App\Http\Controllers\Category\CategoryController::class, 'deleteCategory']);

Route::get('/profile', [App\Http\Controllers\Profile\ProfileController::class, 'showProfile'])->name('profile');


Route::resource('categories', CategoriesController::class);
