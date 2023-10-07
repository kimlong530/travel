<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;



Route::get('travel', function () {
    return view('travel');
});

Route::get('home',function(){
    return view('travel-front');
});

Route::get('master',function(){
    return view('front_master');
});

Route::get('/',[FrontPageController::class,'index'])->name('front.home');
Route::get('/about',[FrontPageController::class,'about'])->name('front.about');
Route::get('/services',[FrontPageController::class,'services'])->name('front.services');
Route::get('/packages',[FrontPageController::class,'packages'])->name('front.packages');
Route::get('/desitination',[FrontPageController::class,'desitination'])->name('front.desitination');
Route::get('/booking',[FrontPageController::class,'booking'])->name('front.booking');
Route::get('/our_guid',[FrontPageController::class,'our_guid'])->name('front.our_guid');
Route::get('/testimonials',[FrontPageController::class,'testimonials'])->name('front.testimonials');
