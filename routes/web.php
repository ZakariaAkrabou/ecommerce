<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Monolog\Processor\HostnameProcessor;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

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




Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

Auth::routes();




Route::get('/redirect', [App\Http\Controllers\HomeController::class,'redirect'])->middleware('auth','verified');

Route::get('/', [HomeController::class, 'Allprod']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::controller(AdminController::class)->middleware('auth','verified')->group(function(){
    //category
    Route::get('/category', 'category');
    Route::get('edit_category/{id}','edit_category')->name('edit_category');
    Route::put('update_category/{id}','update_category')->name('update_category');

    
    Route::POST('/add_category','add_category');
    Route::get('/delete_category/{id}','delete_category');
    //product
    Route::get('/view_product', 'view_product');
    Route::post('/add_product', 'add_product');
    Route::get('/show_product', 'show_product');
    Route::get('/delete_product/{id}','delete_product');
    Route::get('/update_product/{id}','update_product');
    Route::post('/update_product_confirm/{id}','update_product_confirm');
    Route::get('/delivred/{id}','delivred');
    //email
    Route::get('/send_mail','send_mail');
    Route::get('/search','searchdata');
    //user managment
    Route::get('userlist','userlist');
    Route::get('status',  'userOnlineStatus');
    //oder managment
    Route::get('order','order');

    
});







Route::controller(HomeController::class)->group(function () {

    Route::get('/product_detail/{id}','product_detail');
    Route::post('/add_cart/{id}','add_cart');
    Route::get('showcrt','showcrt');
    Route::get('/remove_cart/{id}','remove_cart');
    Route::get('cash_order','cash_order');
    Route::get('show_order','show_order');
    Route::get('/cancel_order/{id}','cancel_order');
    Route::get('/product_search','product_search');
    Route::get('shop','shop')->name('shop');
    Route::get('products/filter', 'filter');
    Route::post('products/filter', 'filter');
   
});


Route::get('contact',[ContactController::class, 'show'])->name('contact.show');
Route::post('contact',[ContactController::class,'submit'])->name('contact.submit');