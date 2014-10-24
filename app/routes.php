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

Route::get('/', array('as'=>'home','uses' => 'HomeController@index'));
Route::get('boom',array('as'=>'boom','uses'=>'BoomController@index'));

Route::get('/article/{id}',array('as'=>'home.article.id','uses'=>'HomeController@articleContent'));
//Route::get('/article/{id}',array('uses'=>'HomeController@articleContent'));

Route::get('admin/login',array('as'=>'login','uses'=>'LoginController@login'));


Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function()
{
    Route::any('/', 'App\Controllers\Admin\PagesController@index');
    Route::resource('articles', 'App\Controllers\Admin\ArticlesController',array('only' =>array('index') ));
    Route::resource('pages', 'App\Controllers\Admin\PagesController');
});