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

// Jaipur to Domestic Routes
Route::view('jaipur-to-delhi-courier-services', 'routes.delhi')->name('routes.delhi');
Route::view('jaipur-to-bangalore-courier-services', 'routes.bangalore')->name('routes.bangalore');
Route::view('jaipur-to-gurugram-courier-services', 'routes.gurugram')->name('routes.gurugram');
Route::view('jaipur-to-hyderabad-courier-services', 'routes.hyderabad')->name('routes.hyderabad');
Route::view('jaipur-to-kolkata-courier-services', 'routes.kolkata')->name('routes.kolkata');
Route::view('jaipur-to-pune-courier-services', 'routes.pune')->name('routes.pune');
Route::view('jaipur-to-mumbai-courier-services', 'routes.mumbai')->name('routes.mumbai');
Route::view('jaipur-to-chennai-courier-services', 'routes.chennai')->name('routes.chennai');
Route::view('jaipur-to-ahmedabad-courier-services', 'routes.ahmedabad')->name('routes.ahmedabad');
Route::view('jaipur-to-visakhapatnam-courier-services', 'routes.visakhapatnam')->name('routes.visakhapatnam');
Route::view('jaipur-to-ranchi-courier-services', 'routes.ranchi')->name('routes.ranchi');
Route::view('jaipur-to-jodhpur-courier-services', 'routes.jodhpur')->name('routes.jodhpur');
Route::view('jaipur-to-chandigarh-courier-services', 'routes.chandigarh')->name('routes.chandigarh');
Route::view('jaipur-to-patna-courier-services', 'routes.patna')->name('routes.patna');