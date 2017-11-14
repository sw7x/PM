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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'PageController@index');

Route::get('/invoice','PageController@invoice');
Route::get('/profile','PageController@profile');
Route::get('/login','PageController@login');
Route::get('/register','PageController@register');
Route::get('/lockscreen','PageController@lockscreen');
Route::get('/404','PageController@page404');
Route::get('/500','PageController@page500');
Route::get('/blank','PageController@blank');
Route::get('/pace','PageController@pace');
Route::get('/advanced','PageController@advanced');
Route::get('/editors','PageController@editors');
Route::get('/simple','PageController@simple');
Route::get('/data','PageController@data');
Route::get('/chartjs','PageController@chartjs');
Route::get('/morris','PageController@morris');
Route::get('/flot','PageController@flot');
Route::get('/inline','PageController@inline');
Route::get('/collapsed-sidebar','PageController@collapsedSidebar');
Route::get('/general','PageController@uiGeneral');
Route::get('/form-general','PageController@formGeneral');
Route::get('/icons','PageController@icons');
Route::get('/buttons','PageController@buttons');
Route::get('/sliders','PageController@sliders');
Route::get('/timeline','PageController@timeline');
Route::get('/modals','PageController@modals');
Route::get('/widgets','PageController@widgets');
Route::get('/index2','PageController@index2');
Route::get('/top-nav','PageController@topNav');
Route::get('/boxed','PageController@boxed');
Route::get('/fixed','PageController@fixed');
Route::get('/collapsed-sidebar','PageController@collapsedSidebar');
Route::get('/mailbox','PageController@mailbox');
Route::get('/read-mail','PageController@readMail');
Route::get('/calendar','PageController@calendar');
Route::get('/starter','PageController@starter');
