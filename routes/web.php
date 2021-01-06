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

Route::get('/detail_Product', [App\Http\Controllers\ProductController::class, 'detail'])->name('detail_Product');

Route::get('/product_name/{id}', [App\Http\Controllers\ProductController::class, 'showProductName'])->name('product.name');

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


//add to Cart

Route::post('/addToCart', [App\Http\Controllers\CartController::class, 'add'])->name('add.to.cart');//when user click on add to cart in product name


Route::get('/myCart', [App\Http\Controllers\CartController::class, 'show'])->name('my.cart');//user view all items added to cart

Route::get('/showmyCart', [App\Http\Controllers\CartController::class, 'showMyCart'])->name('show.myCart');

//delete for cart
Route::get('/delete_Cart/{id}', [App\Http\Controllers\CartController::class, 'delete'])->name('delete_Cart');

//end to cart

//order product

Route::post('/createorder', [App\Http\Controllers\OrderController::class, 'add'])->name('create.order');

Route::get('/myorder', [App\Http\Controllers\OrderController::class, 'show'])->name('my.order');
//end order

// route for processing payment
Route::post('/paypal', [App\Http\Controllers\PaymentController::class, 'payWithpaypal'])->name('paypal');

// route for check status of the payment
Route::get('/status', [App\Http\Controllers\PaymentController::class, 'getPaymentStatus'])->name('status');

//pdf
Route::get('/pdfReport', [App\Http\Controllers\PDFController::class, 'pdfReport'])->name('pdfReport');

//order
Route::get('/order', [App\Http\Controllers\MyOrderController::class, 'add'])->name('orders');
Route::get('/myitems', [App\Http\Controllers\OrderController::class, 'show'])->name('my.items');

Route::get('staff/home', [HomeController::class, 'staffHome'])->name('staff.home')->middleware('is_staff');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
