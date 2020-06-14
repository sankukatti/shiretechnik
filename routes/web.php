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

Route::get( '/', 'HomeController@get' );

Route::get( '/products/hvac', 'PagesController@getHvac' );
Route::get( '/products/elecCooling', 'PagesController@getElecCooling' );
Route::get( '/products/hvacProducts', 'PagesController@getHcavProducts' );
Route::get( '/products/hvacServices', 'PagesController@getHcavServices' );
Route::get( '/products/mechDesign', 'PagesController@getMechDesign' );
Route::get( '/products/reliability', 'PagesController@getReliability' );
Route::get( '/products/turboSoftware', 'PagesController@getTurboSoftware' );
Route::get( '/products/crtechSolutions', 'PagesController@getcrTech' );

Route::get( '/industries/tcfd', 'PagesController@getTcfd' );
Route::get( '/industries/visualdoc', 'PagesController@getVisualdoc' );
Route::get( '/industries/caeses', 'PagesController@getCaeses' );
Route::get( '/industries/consumerProducts', 'PagesController@getConsumerProducts' );
Route::get( '/industries/genesis', 'PagesController@getGenesis' );
Route::get( '/industries/thermal', 'PagesController@getThermal' );

Route::get( '/partners/friendshipSystems', 'PagesController@getfrdshipSystems');
Route::get( '/partners/vrand', 'PagesController@getVRand');
Route::get( '/partners/cfdsupport', 'PagesController@getCfdsupport');
Route::get( '/partners/candrtech', 'PagesController@getCandrtech');

Route::get( '/about', 'PagesController@getAbout' );

Route::get( '/contact', 'ContactsController@getContact' );
Route::post( '/contact', 'ContactsController@sendContact' );

Route::get( '/careers', 'CareersController@getCareers');
Route::post( '/careers', 'CareersController@addProfile');

Route::get( '/forum', 'ForumController@getBlogs');
Route::get( '/forum/{blog_id}', 'ForumController@getBlog');
