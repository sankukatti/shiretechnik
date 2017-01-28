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

Route::get( '/industries/aerospace', 'PagesController@getAerospace' );
Route::get( '/industries/automobile', 'PagesController@getAutomibile' );
Route::get( '/industries/elecCooling', 'PagesController@getElecCooling' );
Route::get( '/industries/consumerProducts', 'PagesController@getConsumerProducts' );
Route::get( '/industries/defence', 'PagesController@getDefence' );

Route::get( '/about', 'PagesController@getAbout' );

Route::get( '/contact', 'ContactsController@getContact' );
Route::post( '/contact', 'ContactsController@sendContact' );

Route::get( '/careers', 'CareersController@getCareers');
Route::post( '/careers', 'CareersController@addProfile');

Route::get( '/forum', 'ForumController@getBlogs');
Route::get( '/forum/{blog_id}', 'ForumController@getBlog');
