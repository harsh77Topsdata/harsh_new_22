<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\OfferController;
use App\Http\Middleware\admin_before_login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CatgoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\admin_after_login;


Route::get('/', function () {
    return view('website.home');
});

Route::get('/about', function () {
    return view('website.about');
});

Route::get('/gallery', function () {
    return view('website.gallery');
});

Route::get('/offers',[OfferController::class,'index']);



/*-----------signup & login-------------*/
Route::get('/signup',[UserController::class,'create'])->middleware(\App\Http\Middleware\user_before_login::class);
Route::post('/user_signup',[UserController::class,'store'])->middleware(\App\Http\Middleware\user_before_login::class);

Route::get('/login',[UserController::class,'login'])->middleware(\App\Http\Middleware\user_before_login::class);
Route::post('/user_auth',[UserController::class,'user_auth'])->middleware(\App\Http\Middleware\user_before_login::class);
Route::get('/user_logout',[UserController::class,'user_logout']);

/*-----------User Profile-------------*/
Route::get('/user_profile',[UserController::class,'user_profile'])->middleware(\App\Http\Middleware\user_after_login::class);
Route::get('/user_profile/{id}',[UserController::class,'edit'])->middleware(\App\Http\Middleware\user_after_login::class);
Route::get('/update_user/{id}',[UserController::class,'update'])->middleware(\App\Http\Middleware\user_after_login::class);

/*-----------Contact-------------*/
Route::get('/contact',[ContactController::class,'create']);
Route::post('/user_contact',[ContactController::class,'store']);

/*-----------Order-------------*/
Route::get('/order/{id}',[OrderController::class,'index'])->middleware(\App\Http\Middleware\user_after_login::class);
Route::post('/order/{id}',[OrderController::class,'store'])->middleware(\App\Http\Middleware\user_after_login::class);
Route::get('/order/{email}',[OrderController::class,'user_data']);
Route::get('/order_view/{id}', [OrderController::class, 'order_view']);

/*-----------product-------------*/
Route::get('/product/{id}',[ProductController::class,'index']);


/*-----------Catgories-------------*/
Route::get('/catgories',[CatgoryController::class,'index']);

Route::get('*', function () {
    return view('website.pnf');
});


//-------------------ADMIN-----------------//

Route::middleware([admin_before_login::class])->group(function(){

Route::get('/admin_login',[AdminLoginController::class,'admin_login']);
Route::post('/admin_auth',[AdminLoginController::class,'admin_auth']);
});

Route::middleware([admin_after_login::class])->group(function(){

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


/*-----------admin product-------------*/
Route::get('/add_product',[ProductController::class,'create']);
Route::post('/add_product',[ProductController::class,'store']);
Route::get('/manage_product',[ProductController::class,'show']);
Route::get('/manage_product/{id}',[ProductController::class,'destroy']);

/*-----------manage order-------------*/
Route::get('/manage_order',[OrderController::class,'show']);

/*-----------manage cotact-------------*/
Route::get('/manage_contact',[ContactController::class,'show']);
Route::get('/manage_contact/{id}',[ContactController::class,'destroy']);


/*-----------add catgories-------------*/
Route::get('/add_catgories',[CatgoryController::class,'create']);
Route::post('/add_catgories',[CatgoryController::class,'store']);
Route::get('/manage_catgories',[CatgoryController::class,'show']);
Route::get('/manage_catgories/{id}',[CatgoryController::class,'destroy']);

/*-----------offers-------------*/
Route::get('/add_offers',[OfferController::class,'create']);
Route::post('/add_offers',[OfferController::class,'store']);
Route::get('/manage_offers',[OfferController::class,'show']);


Route::get('/admin_logout',[AdminLoginController::class,'admin_logout']); /*-------adminlogout----------*/

Route::get('*', function () {
    return view('admin.pnf');
});

});


