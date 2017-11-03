<?php

Route::group(['prefix'=> 'admin','namespace'=>'BackEnd'],function (){
    Route::resource('users', 'UserController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('gift-card', 'GiftCardController');
    Route::resource('home-image', 'HomeImageController');

    Route::get('about-us', 'AboutUsController@index')->name('about-us');
    Route::put('about-us', 'AboutUsController@update')->name('aboutus-update');
    Route::post('about-us', 'AboutUsController@aboutUsSaveVideo')->name('aboutUsSaveVideo');
    Route::get('information', 'InformationController@index')->name('information');
    Route::put('information', 'InformationController@update')->name('inforUpdate');
    Route::get('profile', 'UserController@profile')->name('profile');
});
Route::group(['namespace'=>'FrontEnd'], function (){
    Route::get('/','HomeController@index')->name('homepage');
    Route::get('/aboutus','AboutController@index')->name('aboutus');
    Route::get('/gallery','GalleryController@index')->name('gallery');
    Route::get('/gift-cards','GiftCardsController@index')->name('giftcards');
    Route::get('/polish-brands','PolishBrandsController@index')->name('polishbrands');
    Route::get('/contact','ContactController@index')->name('contact');
    Route::get('/services','ServicesController@index')->name('services');
    Route::get('/service-detail','ServiceDetailController@index')->name('servicedetail');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
