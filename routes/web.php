<?php

use App\Http\Controllers\AggregatorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\SourceController as AdminSourceController;

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

//welcome routes
Route::resource('/', WelcomeController::class);

Route::get('/aggregator', [AggregatorController::class, 'index'])
    ->name('aggregator');

Route::resource('/feedback', FeedbackController::class);

Route::get('/auth', [AuthController::class, 'index'])
    ->name('auth');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
    Route::get('/', [AdminMainController::class, 'index'])
        ->name('index');
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
    Route::resource('/sources', AdminSourceController::class);
});

//categories routes
Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])
    ->where('category', '\d+')
    ->name('categories.show');

//news routes
Route::get('/news', [NewsController::class, 'index'])
    ->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

//sources routes
Route::get('/sources', [SourceController::class, 'index'])
    ->name('sources.index');
Route::get('/sources/{source}', [SourceController::class, 'show'])
    ->where('source', '\d+')
    ->name('sources.show');
