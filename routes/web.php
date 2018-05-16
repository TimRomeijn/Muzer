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

Route::get('/profiles/musicianprofile/{profile}', 'ProfilesController@musicianprofile');

Route::get('/profiles/bandprofile/{profile}', 'ProfilesController@bandprofile');

Route::get('/profiles/stageprofile/{profile}', 'ProfilesController@stageprofile');

Route::post('/profiles/make-profile-musician', 'ProfilesController@store');



//Profiles content routing
Route::get('/profiles/musicianprofile/{profile}/{item}', 'ProfilesController@musicianprofile');

Route::get('/profiles/bandprofile/{profile}/{item}', 'ProfilesController@bandprofile');

Route::get('/profiles/stageprofile/{profile}/{item}', 'ProfilesController@stageprofile');


// Chat Routing

Route::get('/chatsystem', 'ChatController@index');

// Authentication Routing
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/selectprofiletype', 'ProfilesController@selectprofiletype');
