<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontendController;
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

// Route::get('/', function () {
//     return view('Frontend.blog');
// });
// Route::get('/detail', function () {
//     return view('Frontend.detail');
// });
// Route::get('/categories', function () {
//     return view('Frontend.categories');
// });

Route::get('/', [FrontendController::class, 'homepage'])->name('front.homepage');
Route::get('/categories', [FrontendController::class, 'categories'])->name('front.categories');
Route::get('/detail', [FrontendController::class, 'detail'])->name('front.detail');


Route::resource('admin/category', CategoryController::class);
Route::resource('admin/blog', BlogController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
