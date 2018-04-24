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


//General Routing

Route::get('/', function () {
    return view('home');
});



// Advanced Search Routing

Route::get('/advancedsearch', 'AdvancedSearchController@index');

Route::get('/advancedsearch/bandsearch', 'AdvancedSearchController@bandsearch');

Route::get('/advancedsearch/stagesearch', 'AdvancedSearchController@stagesearch');



// Profiles Routing

Route::get('/profiles/musicianprofile', 'ProfilesController@musicianprofile');

Route::get('/profiles/bandprofile', 'ProfilesController@bandprofile');

Route::get('/profiles/stageprofile', 'ProfilesController@stageprofile');


// Chat Routing