<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/staff/insertCategory', function () {
    return view('insertCategory');
});


//add product
Route::post('/staff/insertProduct/store', [App\Http\Controllers\ProductController::class, 'store'])->name('addProduct');

Route::get('/staff/showProduct', [App\Http\Controllers\ProductController::class, 'show'])->name('showProduct');

Route::get('/staff/insertProduct', [App\Http\Controllers\ProductController::class, 'create'])->name('insertProduct');

Route::get('/staff/editproduct/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('editproduct');

Route::get('/staff/deleteProduct/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('deleteProduct');

Route::post('/staff/updateproduct', [App\Http\Controllers\ProductController::class, 'update'])->name('updateproduct');

Route::post('/staff/searchproduct', [App\Http\Controllers\ProductController::class, 'search'])->name('search.product');

Route::post('/staff/searchproduct', [App\Http\Controllers\ProductController::class, 'search'])->name('search.product');

Route::get('/search',[App\Http\Controllers\ProductController::class, 'index'])->name('search');
Route::get('/autocomplete',[App\Http\Controllers\ProductController::class, 'autocomplete'])->name('autocomplete');

//end of adding proudct

Route::get('/showUsers', [App\Http\Controllers\HomeController::class, 'show'])->name('showUsers');

Auth::routes();
//add category
Route::post('/staff/insertCategory/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('addCategory');

Route::get('/staff/showCategory', [App\Http\Controllers\CategoryController::class, 'show'])->name('showCategory');

Route::get('/staff/deleteCategory/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('deleteCategory');
//end of category
Route::get('staff/home', [HomeController::class, 'staffHome'])->name('staff.home')->middleware('is_staff');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
