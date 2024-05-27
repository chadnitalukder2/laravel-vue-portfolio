<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(HeaderController::class)->group(function () {
    Route::get('/get_header_data', 'getHeaderData')->name('get_header_data');
    Route::post('/add_header_data', 'addHeaderData')->name('add_header_data');
    Route::get('/edit_header_data/{id}', 'editHeaderData')->name('edit_header_data');
    Route::post('/update_header_data/{id}', 'updateHeaderData')->name('update_header_data');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/get_about', 'getAbout')->name('get_about');
    Route::post('/add_about', 'addAbout')->name('add_about');
    Route::get('/edit_about/{id}', 'editAbout')->name('edit_about');
    Route::post('/update_about/{id}', 'updateAbout')->name('update_about');
});

Route::controller(ServiceController::class)->group(function () {
    Route::get('/get_service', 'getService')->name('get_service');
    Route::post('/add_service', 'addService')->name('add_service');
    Route::get('/edit_service/{id}', 'editService')->name('edit_service');
    Route::post('/update_service/{id}', 'updateService')->name('update_service');
    Route::get('/delete_service/{id}', 'deleteService')->name('delete_service');
});

Route::controller(PortfolioController::class)->group(function () {
    Route::get('/get_portfolio', 'getPortfolio')->name('get_portfolio');
    Route::post('/add_portfolio', 'addPortfolio')->name('add_portfolio');
    Route::get('/edit_portfolio/{id}', 'editPortfolio')->name('edit_portfolio');
    Route::post('/update_portfolio/{id}', 'updatePortfolio')->name('update_portfolio');
    Route::get('/delete_portfolio/{id}', 'deletePortfolio')->name('delete_portfolio');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('/get_blog', 'getBlog')->name('get_blog');
    Route::post('/add_blog', 'addBlog')->name('add_blog');
    Route::get('/edit_blog/{id}', 'editBlog')->name('edit_blog');
    Route::post('/update_blog/{id}', 'updateBlog')->name('update_blog');
    Route::get('/delete_blog/{id}', 'deleteBlog')->name('delete_blog');
});

