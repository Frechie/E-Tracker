<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Category\CategoriesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/{type}', function (Request $request) {

    $requestTyoe = $request->type;

    $issueType = Issue::where('issue_status', $requestTyoe)->get();

    return view('issues.dashboard-issues')->with(['issues_type' => $issueType, 'requestType' => $requestTyoe ]);
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\Profile\ProfileController::class, 'showProfile'])->name('profile');


Route::resource('categories', CategoriesController::class);

Route::resource('issues', IssuesController::class);
