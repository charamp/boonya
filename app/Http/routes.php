<?php
 
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@Homepage');

Route::get('/amulet', 'AmuletController@Amuletlist');

Route::get('/amulet/{id}', 'AmuletController@Show');

Route::get('/load/{id}', 'AmuletController@Load');

Route::get('/manage', 'AdminController@LoginPage');

Route::get('/manage/addamulet', 'AdminController@AddAmuletPage');

Route::get('/manage/amuletlist', 'AdminController@AmuletListPage');