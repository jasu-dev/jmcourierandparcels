<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('services', 'services')->name('services');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');


Route::view('services/courier-services-jaipur', 'services.courier')->name('services.courier');
Route::view('services/cargo-services-jaipur', 'services.cargo')->name('services.cargo');
Route::view('services/luggage-transport-jaipur', 'services.luggage')->name('services.luggage');
Route::view('services/parcel-delivery-jaipur', 'services.parcel')->name('services.parcel');