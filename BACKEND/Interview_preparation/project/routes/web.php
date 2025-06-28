<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;


Route::get('/',[StoreController::class,'index']);

Route::post('add_product',[StoreController::class,'store']);
Route::get('manage_product',[StoreController::class,'show']);
Route::get('edit_product',[StoreController::class,'create']);
Route::get('edit_product/{id}',[StoreController::class,'edit']);
Route::post('edit_product/{id}',[StoreController::class,'update']);
Route::get('manage_product/{id}',[StoreController::class,'destroy']);
