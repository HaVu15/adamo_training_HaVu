<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GalleryController;

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
Route::get('/home',[Controller::class,'index'] );
Route::get('/for-women',[Controller::class,'for_women'] );
Route::get('/detail/{product_id}',[Controller::class,'detail'] );

//BackEnd
Route::get('/admin',[AdminController::class,'index']); 
Route::get('/register',[AdminController::class,'register']);
Route::post('/register-post',[AdminController::class,'register_post']);
Route::get('/login',[AdminController::class,'login']);
Route::post('/login-post',[AdminController::class,'login_post']);
Route::get('/logout',[AdminController::class,'logout']);


//Category
Route::get('/all-category',[CategoryController::class,'all_category']); 
Route::get('/add-category',[CategoryController::class,'add_category']); 
Route::post('/save-category',[CategoryController::class,'save_category'] );
Route::get('/delete-category/{category_id}',[CategoryController::class,'delete_category'] );
Route::get('/edit-category/{category_id}',[CategoryController::class,'edit_category'] );
Route::post('/update-category/{category_id}',[CategoryController::class,'update_category'] );

//Product
Route::get('/add-product',[ProductController::class,'add_product']); 
Route::get('/all-product',[ProductController::class,'all_product']);
Route::get('/delete-product/{product_id}',[ProductController::class,'delete_product']); 
Route::get('/edit-product/{product_id}',[ProductController::class,'edit_product']); 
Route::post('/save-product',[ProductController::class,'save_product'] );
Route::post('/update-product/{product_id}',[ProductController::class,'update_product'] );

//Gallery
Route::get('/add-gallery/{product_id}',[GalleryController::class,'add_gallery']); 
Route::post('/select-gallery',[GalleryController::class,'select_gallery']); 
Route::post('/insert-gallery/{pro_id}',[GalleryController::class,'insert_gallery']); 
Route::post('/delete-gallery',[GalleryController::class,'delete_gallery']); 






