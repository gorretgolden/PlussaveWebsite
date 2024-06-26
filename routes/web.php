<?php

use App\Http\Controllers\AboutUsPageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactUsPageController;
use App\Http\Controllers\ServicesPageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\SavingsController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager as FacadesVoyager;



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
    return view('pages.home');
});
Route::get('/services',[ServicesPageController::class])->name('services');
Route::get('/about_us',[AboutUsPageController::class,'index'])->name('about-us');
Route::get('/contact_us',[ContactUsPageController::class,'index'])->name('contact-us');
Route::get('/faqs',[FaqController::class,'index'])->name('faqs');
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/savings',[SavingsController::class,'index'])->name('savings');
#Route::get('/blog',['blogPageController@index'])->name('services');

Route::group(['prefix' => 'admin'], function () {
    FacadesVoyager::routes();
});
