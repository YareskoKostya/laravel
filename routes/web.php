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
    return view('members.index',  [
        'members' => App\Models\Member::where('visible', true)->get()
    ]);
});

Route::post('members/store', 'MembersController@store')->name('members.store');

Route::post('data/store', 'DataController@store')->name('data.store');

Route::get('list', 'MembersController@list')->name('list');

//Route::get('/welcome', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
