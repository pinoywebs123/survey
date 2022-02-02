<?php

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/test','AuthController@test');

Route::get('/login','AuthController@login')->name('login');
Route::post('/login_check','AuthController@login_check')->name('login_check');
Route::get('/register','AuthController@register')->name('register');
Route::post('/register_check','AuthController@register_check')->name('register_check');
Route::get('/logout','AuthController@logout')->name('logout');

Route::group(['middleware'=> 'auth','cors'], function(){

Route::get('/users','UserController@users')->name('users');
Route::get('/section2','UserController@section2')->name('section2');
Route::get('/section3','UserController@section3')->name('section3');
Route::get('/section4','UserController@section4')->name('section4');
Route::get('/message','UserController@message')->name('message');

Route::post('/section2_batch1','UserController@section2_batch1')->name('section2_batch1');
Route::post('/section2_batch2','UserController@section2_batch2')->name('section2_batch2');
Route::post('/section2_batch3','UserController@section2_batch3')->name('section2_batch3');
Route::post('/section2_batch4','UserController@section2_batch4')->name('section2_batch4');
Route::post('/section2_batch5','UserController@section2_batch5')->name('section2_batch5');


Route::post('/section4_batch1','UserController@section4_batch1')->name('section4_batch1');
Route::post('/section4_batch2','UserController@section4_batch2')->name('section4_batch2');
Route::post('/section4_batch3','UserController@section4_batch3')->name('section4_batch3');
Route::post('/section4_batch4','UserController@section4_batch4')->name('section4_batch4');
Route::post('/section4_batch5','UserController@section4_batch5')->name('section4_batch5');

Route::get('/home-admin','UserController@home_admin')->name('home_admin');
Route::get('/users-list','UserController@users_list')->name('users_list');
Route::get('/users-update/{id}','UserController@users_update')->name('users_update');
Route::get('/view-user-survey/{id}','UserController@view_user_survey')->name('view_user_survey');
Route::get('/admin-message','UserController@admin_message')->name('admin_message');

}); 
