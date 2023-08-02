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



Route::group(['middleware'=>'isLogin'],function (){
    Route::get('/login',[\App\Http\Controllers\Auth\LoginController::class,'login'])->name('login');
    Route::post('custom-login', [\App\Http\Controllers\Auth\LoginController::class, 'customLogin'])->name('login.custom');
});

Route::group(['middleware'=>'notLogin'],function (){
    Route::view('/admin','admin.index')->name('index');
    Route::get('signout', [\App\Http\Controllers\Auth\LoginController::class, 'signOut'])->name('signout');


//About
    Route::controller(\App\Http\Controllers\Admin\AboutController::class)->group(function (){
        Route::get('admin/about','index')->name('admin.about');
        Route::post('admin/about/update','update')->name('admin.about.update');
    });

    //Partners
    Route::controller(\App\Http\Controllers\Admin\PartnerController::class)->group(function (){
        Route::get('admin/partner','index')->name('admin.partner');
        Route::get('admin/partner/create','create')->name('admin.partner.create');
        Route::post('admin/partner/store','store')->name('admin.partner.store');
        Route::get('/status/update/partner', 'updateStatus')->name('status.partner');
        Route::get('admin/partner/edit/{id}','edit')->name('admin.partner.edit');
        Route::post('admin/partner/update/{id}','update')->name('admin.partner.update');
        Route::get('admin/partner/delete/{id}','destroy')->name('admin.partner.destroy');
    });


    //Slider
    Route::controller(\App\Http\Controllers\Admin\SliderController::class)->group(function (){
        Route::get('admin/slider','index')->name('admin.slider');
        Route::post('admin/slider/update','update')->name('admin.slider.update');
    });


    //Olke
    Route::controller(\App\Http\Controllers\Admin\OlkeController::class)->group(function (){
        Route::get('admin/olke','index')->name('admin.olke');
        Route::get('admin/olke/create','create')->name('admin.olke.create');
        Route::post('admin/olke/store','store')->name('admin.olke.store');
        Route::get('/status/update/olke', 'updateStatus')->name('status.olke');
        Route::get('admin/olke/edit/{id}','edit')->name('admin.olke.edit');
        Route::post('admin/olke/update/{id}','update')->name('admin.olke.update');
        Route::get('admin/olke/delete/{id}','destroy')->name('admin.olke.destroy');
    });


    //Settings
    Route::controller(\App\Http\Controllers\Admin\SettingController::class)->group(function (){
        Route::get('admin/setting','index')->name('admin.setting');
        Route::post('admin/setting/update','update')->name('admin.setting.update');
    });


    //Olke
    Route::controller(\App\Http\Controllers\Admin\BlogController::class)->group(function (){
        Route::get('admin/blog','index')->name('admin.blog');
        Route::get('admin/blog/create','create')->name('admin.blog.create');
        Route::post('admin/blog/store','store')->name('admin.blog.store');
        Route::get('/status/update/blog', 'updateStatus')->name('status.blog');
        Route::get('admin/blog/edit/{id}','edit')->name('admin.blog.edit');
        Route::post('admin/blog/update/{id}','update')->name('admin.blog.update');
        Route::get('admin/blog/delete/{id}','destroy')->name('admin.blog.destroy');
    });


});//notlogin


//Front aşağıda başlayır

Route::prefix('{lang?}')->middleware('lang')->group(function () {
    Route::get('', [\App\Http\Controllers\Frontkam\HomeController::class, 'index'])->name('index');
    Route::get('haqqimizda',[\App\Http\Controllers\Frontkam\AboutController::class,'about'])->name('about');
    Route::get('/elaqe',[\App\Http\Controllers\Frontkam\ContactController::class,'contact'])->name('contact');
    Route::get('/blog',[\App\Http\Controllers\Frontkam\BlogController::class,'blog'])->name('blog');
    Route::get('/blog/{slug}',[\App\Http\Controllers\Frontkam\BlogController::class,'detail'])->name('blog-detail');
    Route::resource('message', \App\Http\Controllers\Frontkam\MessageController::class);
});
