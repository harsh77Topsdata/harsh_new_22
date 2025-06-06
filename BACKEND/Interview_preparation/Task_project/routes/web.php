<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[ProductController::class,'index']);

Route::post('/add_product',[ProductController::class,'store']);
Route::get('/add_product',[ProductController::class,'create']);
Route::get('/manage_product',[ProductController::class,'show']);
Route::get('/manage_product/{id}',[ProductController::class,'destroy']);
Route::get('/edit_product/{id}',[ProductController::class,'edit']);
Route::post('/edit_product/{id}',[ProductController::class,'update']);

Route::get('/signup',[CustomerController::class,'index']);
Route::post('/user_auth',[CustomerController::class,'store']);


Route::get('/add_items',[ItemController::class,'index']);
Route::post('/add_items',[ItemController::class,'store']);
Route::get('/manage_items',[ItemController::class,'show']);
Route::get('/edit_items/{id}',[ItemController::class,'edit']);
Route::post('/edit_items/{id}',[ItemController::class,'update']);
Route::get('/manage_items/{id}',[ItemController::class,'destroy']);

