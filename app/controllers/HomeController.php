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

		$articles = Article::paginate(10);

		return \View::make('home.show')->with('articles',$articles);
	}
	public function articleContent($id)
	{
		//$id = $_GET['id'];

		$articleContent = Article::where('id','=',$id)->first();
		$comments = Comment::where('aid','=',$id)->first();
		return \View::make('home.articleContent')->with('article',$articleContent)->with('comment',$comments);

		//var_dump($articleContent);
		//return \View::make('home.articleContent')->with('article',$articleContent)->with('comment',$comments);
	}
	public function addComment(){
		$comment = new Comment();

		$aid = Input::get('id');
		var_dump($aid);
		$name = Input::get('name');
		//var_dump($name);
		$title = Input::get('title');
		//var_dump($title);
		$content = Input::get('content');
		//var_dump($content);

		$comment['aid'] = $aid;
		//var_dump($content['id']);
		$comment['name']=$name;
		$comment['title']=$title;
		$comment['content']=$content; 
		$comment->save();
		return Redirect::back();

	}

	public function selectArticle($name){
		switch ($name) {
			case 'php':
				$articles = Article::where('flag','=','php')->paginate(2);
				//var_dump($articles);
				//echo $articles['flag'];
				return View::make('boom.index');
				break;

			case 'laravel':
				$articles = Article::where('flag','=','laravel')->first();
				//return View::make('home.show')->with('articles',$articles);
				break;

			case 'java':
				$articles = Article::where('flag','=','java')->first();
				//return View::make('home.show')->with('articles',$articles);
				return View::make('boom.index');
				break;

			case 'ubuntu':
				$articles = Article::where('flag','=','ubuntu')->first();
				//return View::make('home.show')->with('articles',$articles);
				return View::make('boom.index');
				break;	

			default:
				$articles = Article::paginate(10);
				//return View::make('home.show')->with('articles',$articles);
				return View::make('boom.index');
				break;
		}
	}
}
