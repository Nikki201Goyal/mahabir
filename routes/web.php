<?php

use Illuminate\Support\Facades\Auth;
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

//FrontendController
Route::get('/',[App\Http\Controllers\FrontendController::class,'index'])->name('frontIndex');
Route::get('/about',[App\Http\Controllers\FrontendController::class,'about'])->name('about');
Route::get('/boardmember',[App\Http\Controllers\FrontendController::class,'boardmember'])->name('boardmember');
Route::get('/book',[App\Http\Controllers\FrontendController::class,'book'])->name('book');
Route::get('/carrer',[App\Http\Controllers\FrontendController::class,'carrer'])->name('carrer');
Route::get('/frontContact',[App\Http\Controllers\FrontendController::class,'contact'])->name('frontContact');
Route::get('/product',[App\Http\Controllers\FrontendController::class,'product'])->name('product');
Route::get('/service',[App\Http\Controllers\FrontendController::class,'service'])->name('service');
Route::get('/broucher',[App\Http\Controllers\FrontendController::class,'brouchre'])->name('broucher');
Route::get('/team',[App\Http\Controllers\FrontendController::class,'team'])->name('team');
Route::get('/storeContact',[App\Http\Controllers\FrontendController::class,'storeContact'])->name('storeContact');
Route::get('/applyNow',[App\Http\Controllers\FrontendController::class,'applyNow'])->name('applyNow');
Route::get('/storeJobApplied',[App\Http\Controllers\FrontendController::class,'storeJobApplied'])->name('storeJobApplied');
Route::get('/storeBooking',[App\Http\Controllers\FrontendController::class,'storeBooking'])->name('storeBooking');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Product
Route::get('/viewProducts',[App\Http\Controllers\productController::class,'viewProducts'])->name('viewProducts');
Route::get('/product/add', [App\Http\Controllers\productController::class,'addProduct'])->name('product.add');
Route::POST('/productStore',[App\Http\Controllers\productController::class,'store'])->name('product.store');
Route::get('productEdit/{id}',[App\Http\Controllers\productController::class,'edit'])->name('productEdit');
Route::get('productUpdate/{id}',[App\Http\Controllers\productController::class,'update'])->name('productUpdate');
Route::get('productDelete/{id}',[App\Http\Controllers\productController::class,'delete'])->name('productDelete');



//Job
Route::get('/viewJobs',[App\Http\Controllers\jobController::class,'viewJobs'])->name('viewJobs');
Route::get('/jobStore',[App\Http\Controllers\jobController::class,'store'])->name('jobStore');
Route::get('jobEdit/{id}',[App\Http\Controllers\jobController::class,'edit'])->name('jobEdit');
Route::get('jobUpdate/{id}',[App\Http\Controllers\jobController::class,'update'])->name('jobUpdate');
Route::get('jobDelete/{id}',[App\Http\Controllers\jobController::class,'delete'])->name('jobDelete');

//BackendController
Route::get('/Jobs', [App\Http\Controllers\BackendController::class,'Jobs'])->name('Jobs');
Route::get('/JobsApplied', [App\Http\Controllers\BackendController::class,'JobsApplied'])->name('JobsApplied');
Route::get('/Contact', [App\Http\Controllers\BackendController::class,'Contact'])->name('Contact');

Route::get('/index',[App\Http\Controllers\BackendController::class,'index'])->name('index');
Route::get('/conInfo/{id}',[App\Http\Controllers\BackendController::class,'conInfo'])->name('conInfo');
Route::get('/editproduct',[App\Http\Controllers\BackendController::class,'editproduct'])->name('editproduct');
Route::get('/editjob',[App\Http\Controllers\BackendController::class,'editjob'])->name('editjob');
Route::get('/booking',[App\Http\Controllers\BackendController::class,'booking'])->name('booking');
