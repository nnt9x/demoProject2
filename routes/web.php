<?php

    use App\Http\Controllers\admin\AdminController;
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






