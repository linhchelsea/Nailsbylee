<?php

Route::group(['prefix'=> 'admin','namespace'=>'BackEnd'],function (){
    Route::resource('users', 'UserController');
});
Route::group(['namespace'=>'FrontEnd'], function (){

});
Auth::routes();