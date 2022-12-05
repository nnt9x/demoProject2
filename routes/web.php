<?php

    use App\Http\Controllers\admin\AdminController;
    use App\Http\Controllers\admin\ProductController;
    use App\Http\Controllers\web\WebController;
    use Illuminate\Support\Facades\Route;

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

Route::get('/', [WebController::class,'viewHome']);

Route::get('/home',[WebController::class,'viewHome']);

Route::get('/login',[WebController::class,'viewLogin']);
Route::post('/login',[WebController::class,'login']);

Route::post('/logout',[WebController::class,'logout']);


Route::get('admin/home',[AdminController::class,'viewHome']);

// Tao 1 san pham
Route::get('/admin/products/create',[ProductController::class,'viewCreateProduct']);

Route::post('/admin/products/create',[ProductController::class,'createProduct']);

// Product
// Lay toan bo san pham
Route::get('/admin/products', [ProductController::class,'viewAllProducts'] );
// Lay 1 san pham cu the
Route::get('/admin/products/{id}', [ProductController::class,'viewProductById'] );


// Cap nhat 1 san pham
Route::put('/admin/products/{id}',[ProductController::class,'updateProductById']);
// Xoa 1 san pham
Route::delete('/admin/products/{id}',[ProductController::class,'deleteProductById']);







