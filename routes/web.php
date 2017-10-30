<?php

Route::group(['prefix'=> 'admin','namespace'=>'BackEnd'],function (){
    Route::resource('users', 'UserController');
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
