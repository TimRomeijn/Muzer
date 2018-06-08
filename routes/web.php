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
use App\Mail\BandBooked;
use Illuminate\Support\Facades\Mail;


//General Routing

Route::get('/', function () {

    return view('home');
});



// Advanced Search Routing

Route::get('/advancedsearch', 'AdvancedSearchController@index');

Route::get('/advancedsearch/bandsearch', 'AdvancedSearchController@bandsearch');

Route::get('/advancedsearch/stagesearch', 'AdvancedSearchController@stagesearch');

Route::get('/advancedsearch/filter', 'AdvancedSearchController@getFilterData');



// Profiles Routing

Route::get('/profiles/musicianprofile/{profile}', 'ProfilesController@musicianprofile');

Route::get('/profiles/bandprofile/{profile}', 'ProfilesController@bandprofile');

Route::get('/profiles/stageprofile/{profile}', 'ProfilesController@stageprofile')->name('stageprofile');


//Profiles content routing
Route::get('/profiles/musicianprofile/{profile}/{item}', 'ProfilesController@musicianprofile');

Route::get('/profiles/bandprofile/{profile}/{item}', 'ProfilesController@bandprofile');

Route::get('/profiles/stageprofile/{profile}/{item}', 'ProfilesController@stageprofile');

Route::post('/profiles/editcontent', 'BlocksController@update');

//Route::get('/profiles/editcontent', 'BlocksController@update');


//Mail routing

Route::post('/mail/sendmailtoband', 'MailsController@sendmailtoband');

Route::post('/mail/sendmailtostage', 'MailsController@sendmailtostage');

Route::post('/mail/sendmailtomusician', 'MailsController@sendmailtomusician');



// Chat Routing

Route::get('/chatsystem', 'ChatController@index');

Route::get('messages', 'ChatController@fetchMessages');

Route::post('messages', 'ChatController@sendMessage');


// Authentication Routing
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Profile creation

Route::get('/selectprofiletype', 'ProfilesController@selectprofiletype');

Route::post('/profiles/addprofile', 'ProfilesController@store');


