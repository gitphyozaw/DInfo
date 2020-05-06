<?php

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
    return view('SiteInfo.index');
});


/**admin route**/
	Route::get('/admin', function () { return view('Admin.index');});
/****/
Route::get('/menu_pagoda', function () { return view('Menu.pagoda');});
	Route::get('/menu_pagoda_detail', function () { return view('Menu.pagoda_detail');});
Route::get('/menu_beach', function () { return view('Menu.beach');});
	Route::get('/menu_beach_detail', function () { return view('Menu.beach_detail');});
Route::get('/menu_hotel', function () { return view('Menu.hotel');});
	Route::get('/menu_hotel_detail', function () { return view('Menu.hotel_detail');});
Route::get('/menu_restaurant', function () { return view('Menu.restaurant');});
	Route::get('/menu_restaurant_detail', function () { return view('Menu.restaurant_detail');});
Route::get('/menu_mountain', function () { return view('Menu.mountain');});
	Route::get('/menu_mountain_detail', function () { return view('Menu.mountain_detail');});

Route::get('/gallery', function () { return view('Gallery.gallery');});
Route::get('/gallery_pagoda', function () { return view('Gallery.pagoda');});
Route::get('/gallery_beach', function () { return view('Gallery.beach');});
Route::get('/gallery_hotel', function () { return view('Gallery.hotel');});
Route::get('/gallery_restaurant', function () { return view('Gallery.restaurant_detail');});
	Route::get('/gallery_restaurant_detail', function () { return view('Gallery.restaurant_detail');});
Route::get('/gallery_mountain', function () { return view('Gallery.mountain');});
	Route::get('/gallery_mountain_detail', function () { return view('Gallery.mountain_detail');});
	
//Route::get('/gallery_pagoda', 'homeContorller@pagodaMenu')->name('menu_pagoda');

//Route::get('/delete/{id}', 'SchoolController@delete')->name('delete');
