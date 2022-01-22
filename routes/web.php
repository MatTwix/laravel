<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AggregatorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

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

Route::resource('/feedback', FeedbackController::class, [
    'names' => [
        'index' => 'feedback.index',
        'store' => 'feedback.store'
    ]
]);

Route::get('/auth', [AuthController::class, 'index'])
    ->name('auth');

Route::resource('/aggregator', AggregatorController::class, [
    'names' => [
        'index' => 'aggregator.index',
        'store' => 'aggregator.store'
    ]
]);

//category routes
Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');
Route::get('/categories/{id}', [CategoryController::class, 'show'])
    ->where('id', '\d+')
    ->name('categories.show');

//news routes

//admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::resource('/category', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
});

Route::group(['prefix' => 'categories'], function (){
    Route::get('/news', [NewsController::class, 'index'])
        ->name('news.index');
    Route::get('/news/{id}', [NewsController::class, 'show'])
        ->where('id', '\d+')
        ->name('news.show');
});
