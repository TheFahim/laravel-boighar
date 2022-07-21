<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\FaqController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\SellbookController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\DonatebookController;
use App\Http\Controllers\PublicAuthController;
use App\Http\Controllers\PublicPageController;
use App\Http\Controllers\RequestbookController;
use App\Http\Controllers\PublicProductController;
use App\Http\Controllers\PublicProductDetailsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });





//this is user authentication
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//This is frontend route
Route::controller(PublicController::class)->group(function(){
    Route::get('/','home')->name('homepage');

});

Route::controller(PublicProductController::class)->group(function(){

    Route::get('/bestbook','bestbook')->name('bestbook');
    Route::get('/newcollection','newcollection')->name('newcollection');
    Route::get('/oldbook','oldbook')->name('oldbook');
    Route::get('/getdonate','getdonate')->name('getdonate');
    Route::get('/earnpoint','earnpoint')->name('earnpoint');
});


Route::middleware('auth')->controller(PublicPageController::class)->group(function(){
    Route::get('/aboutus','aboutus')->name('aboutus');
    Route::get('/contactus','contactus')->name('contactus');
    Route::get('/faq','faq')->name('faq');
    Route::get('/events','events')->name('events');

});


Route::middleware('auth')->controller(PublicProductDetailsController::class)->group(function(){
    Route::post('/bookdetails/{bookdetail}','bookdetails')->name('bookdetails');
    Route::get('/cart/{cart}','cart')->name('cart');
    Route::get('/payment/{pay}','payment')->name('payment');


});

Route::middleware('auth')->group(function(){
    Route::resource('sellbooks', SellbookController::class);
    Route::resource('donatebooks', DonatebookController::class);
    Route::resource('requestbooks', RequestbookController::class);
    Route::resource('users', UserController::class);
    Route::resource('carousels', CarouselController::class);
 
 
    Route::get('/user',[UserController::class,'user'])->name('user.register'); 

    Route::resource('banners', BannerController::class);

 

});


    Route::resource('faqs',FaqController::class);    

    Route::get('/user',[UserController::class,'user'])->name('user.register'); 

    Route::middleware('auth')->controller(AdminController::class)->prefix('admin')->group(function(){
        Route::get('/dashboard','dashboard')->name('admin.dashboard');
        Route::get('/productlist','productlist')->name('admin.productlist');
    });





