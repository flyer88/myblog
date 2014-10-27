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

//彩蛋路由
Route::get('boom',array('as'=>'boom','uses'=>'BoomController@index'));


/**
**用户使用
**/
//主页面
Route::get('/', array('as'=>'home','uses' => 'HomeController@index'));
//分页路由
Route::get('/article/{id}',array('as'=>'article.id','uses'=>'HomeController@articleContent'))->where('id','[0-9]+');
Route::get('/article/type/{name}',array('as'=>'home.article.type.name','uses'=>'HomeController@selectArticle'))->where('name','[A-Za-z]+');


/**
**admin使用
**/
//admin登陆路由
Route::get('/admin/login',array('as'=>'admin.login','uses'=>'AdminController@login'));
Route::post('/admin/login',array('as'=>'admin.login.check','uses'=>'AdminController@checkLogin'));
//admin注册路由
Route::get('/admin/regist',array('as'=>'admin.regist','uses'=>'AdminController@regist'));
Route::post('/admin/regist',array('as'=>'admin.regist','uses'=>'AdminController@registIn'));


//登陆后处理

Route::group(array('before' => 'auth'),function(){
	//admin主页默认显示所有文章标题
	Route::any('/admin',array('as'=>'admin','uses'=>'AdminController@index'));
	//查看具体某一个文章内容
	Route::get('/admin/article/{id}',array('as'=>'admin.article.id','uses'=>'AdminController@articleContent'))->where('id','[0-9]+');
	//登出	
	Route::get('/admin/logout',array('as'=>'admin.logout','uses'=>'AdminController@logOut'));
	//文章添加
	Route::get('/admin/article/add',array('as'=>'admin.article.add','uses'=>'AdminController@getAddArticle'));
	Route::post('/admin/article/add',array('as'=>'admin.article.add','uses'=>'AdminController@postAddArticle'));

	//文章更改
	Route::post('/admin/article/update',array('as'=>'admin.article.update','uses'=>'AdminController@postUpdateArticle'));
	Route::get('/admin/article/update/{id}',array('as'=>'admin.article.update.id','uses'=>'AdminController@getUpdateArticle'));
	//文章删除
	Route::post('/admin/article/delete',array('as'=>'admin.article.delete','uses'=>'AdminController@postDeleteArticle'));
	//php类文章
	Route::get('/admin/article/type/{name}',array('as'=>'admin.article.type.name','uses'=>'AdminController@selectArticle'))->where('name','[A-Za-z]+');

	
});


