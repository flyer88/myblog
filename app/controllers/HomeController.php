<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function index()
	{

		$articles = Article::paginate(5);

		return \View::make('home.index')->with('articles',$articles);
	}
	public function articleContent($id)
	{
		//$id = $_GET['id'];

		$articleContent = Article::where('id','=',$id)->first();
		//var_dump($articleContent);
		return \View::make('home.articleContent')->with('article',$articleContent);
	}
}
