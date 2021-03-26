<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Category\CategoriesController;
use App\Http\Controllers\Category\SubCategoryController;
use App\Http\Controllers\Issues\IssuesController;
use Illuminate\Http\Request;
use App\Models\Issues\Issue;

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

Route::get('/dashboard/{type}', function (Request $request) {
    $requestType = $request->type;
    $issueType = Issue::where('issue_status', $requestType)->orderBy('created_at', 'DESC')->get();
    return view('issues.dashboard-issues')->with(['issues_type' => $issueType, 'requestType' => $requestType ]);
});

Auth::routes(['verify' => true]);

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/profile', [App\Http\Controllers\Profile\ProfileController::class, 'showProfile'])->name('profile');


Route::resource('categories', CategoriesController::class);

Route::resource('sub-category', SubCategoryController::class);

Route::resource('issues', IssuesController::class);
