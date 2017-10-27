<?php

Route::group(['prefix'=> 'admin','namespace'=>'BackEnd'],function (){
    Route::resource('users', 'UserController');
});
Route::group(['namespace'=>'FrontEnd'], function (){
    Route::get('/','HomeController@index')->name('homepage');
    Route::get('/aboutus','AboutController@index')->name('aboutus');
    Route::get('/gallery','GalleryController@index')->name('gallery');
    Route::get('/gift-cards','GiftCardsController@index')->name('giftcards');
});
Auth::routes();