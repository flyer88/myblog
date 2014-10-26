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
//用户看到的主界面路由
Route::get('/', array('as'=>'home','uses' => 'HomeController@index'));
//彩蛋路由
Route::get('boom',array('as'=>'boom','uses'=>'BoomController@index'));
//分页路由
Route::get('/article/{id}',array('as'=>'article.id','uses'=>'HomeController@articleContent'));
//Route::get('/article/{id}',array('uses'=>'HomeController@articleContent'));

//Route::get('/admin',array('as'=>'admin','uses'=>'AdminController@index'));
//admin登陆路由
Route::get('/admin/login',array('as'=>'admin.login','uses'=>'AdminController@login'));
Route::post('/admin/login',array('as'=>'admin.login.check','uses'=>'AdminController@checkLogin'));
//admin注册路由
Route::get('/admin/regist',array('as'=>'admin.regist','uses'=>'AdminController@regist'));
Route::post('/admin/regist',array('as'=>'admin.regist','uses'=>'AdminController@registIn'));

//
//Route::get('/admin/article/add',array('as'=>'admin.article.add','uses'=>'AdminController@getAddArticle'));
//Route::post('/admin/article/add',array('as'=>'admin.article.add','uses'=>'AdminController@postAddArticle'));


//Route::get('/admin/article/update/{id}',array('as'=>'admin.article.update.id','uses'=>'AdminController@getUpdateArticle'));
//Route::get('/admin/article/add',array('as'=>'admin.article.add','uses'=>'AdminController@getAddArticle'));

//Route::post('/admin/article/update',array('as'=>'admin.article.update','uses'=>'AdminController@postUpdateArticle'));
//Route::post('/admin/article/add',array('as'=>'admin.article.add','uses'=>'AdminController@postAddArticle'));

//Route::post('/admin/article/delete',array('as'=>'admin.article.delete','uses'=>'AdminController@postDeleteArticle'));

Route::group(array('before' => 'auth'),function(){
	Route::any('/admin',array('as'=>'admin','uses'=>'AdminController@index'));
	Route::get('/admin/article/add',array('as'=>'admin.article.add','uses'=>'AdminController@getAddArticle'));
	Route::post('/admin/article/add',array('as'=>'admin.article.add','uses'=>'AdminController@postAddArticle'));

	Route::post('/admin/article/update',array('as'=>'admin.article.update','uses'=>'AdminController@postUpdateArticle'));

	Route::post('/admin/article/delete',array('as'=>'admin.article.delete','uses'=>'AdminController@postDeleteArticle'));

	Route::get('/admin/article/{id}',array('as'=>'admin.article.id','uses'=>'AdminController@articleContent'));
	Route::get('/admin/article/update/{id}',array('as'=>'admin.article.update.id','uses'=>'AdminController@getUpdateArticle'));
	Route::get('/admin/logout',array('as'=>'admin.logout','uses'=>'AdminController@logOut'));
});
