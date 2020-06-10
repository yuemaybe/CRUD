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

Route::get('/', function () {
    return view('welcome');
});

Route::get('Q2', 'TestController@showInfo');

Route::get('create', function()
{
    return view('create');
});

Route::any('add', 'TestController@showAdd');

Route::delete('delete/{account}','TestController@showDelete');

Route::patch('edit/{account}', function($account){

    $info = new \App\account_info();
    $userinfo = $info -> where('account' , $account) -> get();
    return view('update', ['users' => $userinfo]);
});

Route::patch('update/{account}', 'TestController@showEdit');

Route::get('Q1', 'TestController@showPage');

Route::any('search' , 'TestController@showSearch');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('test' , 'TestController@testUser');