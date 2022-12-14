<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomAuthController;

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

// Route::resource("books",BookController::class);

Route::get('index',[BookController::class,'index']);


Route::post('store',[BookController::class,'store']);


Route::get('addBooks',function(){
    return view('addBooks');
});


Route::get('update/{id}',[BookController::class,'update']);

Route::post('updateBook/{id}',[BookController::class,'updateBook']);

Route::get('delete/{id}',[BookController::class,'destroy']);



// Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 

// Route::get('login', [CustomAuthController::class, 'index'])->name('login');
// Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
// Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
// Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');