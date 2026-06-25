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

Route::view('courier-services-mansarovar-jaipur', 'locations.mansarovar')->name('locations.mansarovar');
Route::view('courier-services-vaishali-nagar-jaipur', 'locations.vaishalinagar')->name('locations.vaishalinagar');
Route::view('courier-services-jhotwara-jaipur', 'locations.jhotwara')->name('locations.jhotwara');

Route::view('courier-services-jagatpura-jaipur', 'locations.jagatpura')->name('locations.jagatpura');
Route::view('courier-services-bani-park-jaipur', 'locations.banipark')->name('locations.banipark');
Route::view('courier-services-sanganer-jaipur', 'locations.sanganer')->name('locations.sanganer');
Route::view('courier-services-malviya-nagar-jaipur', 'locations.malviyanagar')->name('locations.malviyanagar');
Route::view('courier-services-sitapura-jaipur', 'locations.sitapura')->name('locations.sitapura');
Route::view('courier-services-pratap-nagar-jaipur', 'locations.pratapnagar')->name('locations.pratapnagar');