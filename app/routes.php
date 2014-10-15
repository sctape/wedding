<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [
        'as' => 'home',
        'uses' => 'PagesController@home'
    ]);

Route::get('/locations', [
        'as' => 'locations',
        'uses' => 'PagesController@locations'
    ]);

Route::get('/rsvp', [
        'as' => 'rsvp_path',
        'uses' => 'RsvpController@create'
    ]);

Route::get('/registry', [
        'as' => 'registry',
        'uses' => 'PagesController@registry'
    ]);

Route::get('/events', [
        'as' => 'events',
        'uses' => 'PagesController@events'
    ]);

/**
 * Guests
 */
Route::get('/guests', [
    'as' => 'guests_path',
    'uses' => 'GuestsController@create'
]);

Route::post('/guests', [
    'as' => 'guests_path',
    'uses' => 'GuestsController@store'
]);

/**
 * Invites
 */
//Route::get('/invites', [
//    'as' => 'invites_path',
//    'uses' => 'InvitesController@create'
//]);
//
//Route::post('/invites', [
//    'as' => 'invites_path',
//    'uses' => 'InvitesController@store'
//]);
//
//Route::get('/invites/{id}/edit', [
//    'as' => 'invites_edit_path',
//    'uses' => 'InvitesController@edit'
//]);
//
//Route::put('/invites/{id}', [
//    'as' => 'invites_update_path',
//    'uses' => 'InvitesController@update'
//]);

Route::resource('invites', 'InvitesController');