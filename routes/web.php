<?php

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

Route::group(['prefix'=> 'admin', 'middleware' => 'auth'], function (){
   Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');
   Route::resource('/slider', \App\Http\Controllers\Admin\MainPage\SliderController::class);
   Route::resource('/services', \App\Http\Controllers\Admin\ServiceController::class);
   Route::resource('/statistics', \App\Http\Controllers\Admin\MainPage\StatisticController::class);
   Route::resource('/questions', \App\Http\Controllers\Admin\QuestionController::class);
   Route::resource('/blog', \App\Http\Controllers\Admin\BlogController::class);
   Route::resource('/destinations', \App\Http\Controllers\Admin\DestinationController::class);
   Route::resource('/front-mainpage', \App\Http\Controllers\Admin\MainPage\FrontMainpageController::class);
   Route::resource('/services-relinking', \App\Http\Controllers\Admin\ServicesRelinkingController::class);

});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', '\App\Http\Controllers\UserController@loginForm')->name('login.create');
    Route::post('/login', '\App\Http\Controllers\UserController@login')->name('login');
});

Route::get('/', [\App\Http\Controllers\Front\IndexController::class, 'index'])->name('home');
Route::get('/about-us', [\App\Http\Controllers\Front\AboutController::class, 'index'])->name('about-us');
Route::get('/services/{slug}', [\App\Http\Controllers\Front\ServiceController::class, 'show'])->name('service.show');
Route::get('/blog', [\App\Http\Controllers\Front\BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [\App\Http\Controllers\Front\BlogController::class, 'show'])->name('front.blog.show');
Route::get('/quote', [\App\Http\Controllers\Front\QuoteController::class, 'index'])->name('quote');

Route::get('/contacts', [\App\Http\Controllers\Front\ContactController::class, 'index'])->name('contacts');


Route::get('/term-and-conditions', function (){
    return view('pages.other.terms');
})->name('terms');

Route::get('/privacy-policy', function (){
    return view('pages.other.privacy');
})->name('privacy');

Route::post('/send-message', [\App\Http\Controllers\CallbackController::class, 'send'])->name('sendMessage');
Route::post('/send-form', [\App\Http\Controllers\CallbackController::class, 'sendForm'])->name('sendForm');

Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap.index');
Route::get('/sitemap/index', [\App\Http\Controllers\SitemapController::class, 'indexPages'])->name('sitemap.indexPages');
Route::get('/sitemap/blogs', [\App\Http\Controllers\SitemapController::class, 'blogs'])->name('sitemap.blogs');
Route::get('/sitemap/destinations', [\App\Http\Controllers\SitemapController::class, 'destinations'])->name('sitemap.destinations');
Route::get('/sitemap/services', [\App\Http\Controllers\SitemapController::class, 'services'])->name('sitemap.services');

//Route::get('/{slug}', [\App\Http\Controllers\Front\DestinationController::class, 'show'])->name('destination.show');
Route::get('/{slug}-car-shipping', [\App\Http\Controllers\Front\DestinationController::class, 'show'])->where('slug', '[A-Za-z0-9\-]+')->name('destination.show');

Route::fallback(function () {
    return view('errors.404');
});

Route::get('/{any}', function () {
    return view('errors.404');
})->where('any', '.*');
