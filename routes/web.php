<?php

Route::group(['prefix'=> 'admin','namespace'=>'BackEnd'],function (){
    Route::resource('users', 'UserController');
    Route::get('profile', 'UserController@profile')->name('profile');
});
Route::group(['namespace'=>'FrontEnd'], function (){

});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();