<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'App\Http\Controllers\UserController@index')->name('/');


Route::get('/schedule', function () {
    $data['page'] = "schedule";
    return view('schedule',$data);
});

Route::get('/contact', function () {
    $data['page'] = "contact";
    return view('contact',$data);
});


Route::get('/returnequqment/{id?}', 'App\Http\Controllers\AdminController@returnequqment')->name('return.equqment');

Route::get('/adminlogin', 'App\Http\Controllers\AdminController@adminlogindisplay')->name('adminlogin');
Route::post('adminlogin', 'App\Http\Controllers\AdminController@adminlogin')->name('adminlogin');
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin');
Route::get('/equipment', 'App\Http\Controllers\AdminController@equipment')->name('equipment');
Route::get('/equipmentlist', 'App\Http\Controllers\AdminController@equipmentlist')->name('equipmentlist');
Route::get('/addequipment', 'App\Http\Controllers\AdminController@addequipment')->name('addequipment');
Route::post('storeequipment', 'App\Http\Controllers\AdminController@storeequipment')->name('storeequipment');
Route::get('userdelete{id}', 'App\Http\Controllers\AdminController@deleteuser')->name('user.delete');

Route::get('/logout', 'App\Http\Controllers\UserController@logout')->name('logout');
Route::get('/register', 'App\Http\Controllers\UserController@display')->name('register');
Route::get('/login', 'App\Http\Controllers\UserController@displaylogin')->name('login');
Route::post('store', 'App\Http\Controllers\UserController@store')->name('store');
Route::post('createlogin', 'App\Http\Controllers\UserController@createlogin')->name('createlogin');
Route::get('/editprofile','App\Http\Controllers\UserController@edit')->name('editprofile');
Route::post('update', 'App\Http\Controllers\UserController@update')->name('update');

Route::post('sendtxtmail','App\Http\Controllers\MailController@txt_mail')->name('sendtxtmail');
Route::get('/sport','App\Http\Controllers\SportController@display')->name('sport');

Route::get('getbmi', 'App\Http\Controllers\SportController@getbmi')->name('getbmi');
Route::get('/price','App\Http\Controllers\SportController@price')->name('price');

Route::post('addequipment', 'App\Http\Controllers\SportController@addequipment')->name('addequipment');

Route::get('fetchstates', 'App\Http\Controllers\DropdownController@fetchState');
Route::get('fetchcities', 'App\Http\Controllers\DropdownController@fetchCity');

