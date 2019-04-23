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

/* 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

*/

Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/about/team', 'PageController@team');
Route::get('/about/partners', 'PageController@partners');
Route::get('/about/offices', 'PageController@offices');
Route::get('/agents', 'PageController@allAgents');
Route::get('/agents/search', 'PageController@agentSearch');
Route::get('/agents/{id}', 'PageController@showAgent');
Route::post('/agents/{id}/email', 'PageController@emailAgent');

Route::get('/careers', function () {
    return view('careers');
});
Route::get('/100-percent-commission-calculator', function () {
    return view('commission_calculator');
});
Route::get('/buying-a-home', function () {
    return view('buy');
});
Route::post('/buying-a-home', 'ContactController@store')->name('contact.store');
Route::get('/sell-my-house', function () {
    return view('sell');
});
Route::post('/sell-my-house', 'ContactController@store')->name('contact.store');

Route::resource('/homes-for-sale', 'ListingController');
