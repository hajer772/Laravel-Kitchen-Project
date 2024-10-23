<?php

use App\Http\Controllers\Front\AboutController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\EmailController;
use App\Http\Controllers\Front\StandAloneController;
use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Front\KitchenDesignController;
use App\Models\ContactUs;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    //    Auth::routes();


    Auth::routes();

    // Route::get('/home', function () {
    //     return view('front.index');
    // })->name('home');

    // Route::get('/home/standalone', function () {
    //     return view('front.pages.standalone');
    // })->name('standalone');

    Route::get('/home', [HomeController::class, 'index'])->name('front.index');

    Route::get('/standalone', [StandAloneController::class, 'index'])->name('standalone');

    Route::get('/about', [AboutController::class, 'index'])->name(name: 'front.about');
    Route::get('/contact-us', [ContactUsController::class, 'index'])->name(name: 'front.contact-us');
    Route::get('/design', [KitchenDesignController::class, 'index'])->name(name: 'front.design');

    Route::post('/testroute',  [EmailController::class, 'sendmessage'])->name(name: 'front.send');
});
