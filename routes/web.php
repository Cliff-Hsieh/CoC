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

Route::get('/', function(){ 
    $videos = DB::table('replay')->get();
    return view('homepage/replay', ['videos' => $videos]);
});
Route::get('/clans','DataController@getClans');
Route::get('/clan/{clanID}', 'DataController@getClan')->name('clanID');
Route::get('/clan/{clanID}/warlog', 'DataController@getClanWarLog')->name('clanID');
Route::get('/clan/{clanID}/currentwar', 'DataController@getClanCurrentWar')->name('clanID');
Route::get('/player/{playerID}', 'DataController@getPlayer')->name('playerID');
