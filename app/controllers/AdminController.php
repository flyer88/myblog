<?php
class AdminController extends BaseController{
	
	public	function login(){
		return \View::make('admin.login');
	}

	public function checkLogin(){
		$mail = Input::get('mail');
		$password = Input::get('password');
		$user = User::find(1);

		//echo $mail;
		//var_dump($user['mail']);
		if (Auth::attempt(array('mail' => $mail, 'password' => $password),true)){
    			return Redirect::to('admin');
		}else{
			echo "failed";
		}
	}
	public function isLogin(){

		if (Auth::check()){
    		// 用户已经登陆...
		}
	}
	public function regist(){
		return View::make('admin.regist');
	}
	public function registIn(){
		$user  =  new User;

		$mail = Input::get('mail');
		$password = Hash::make(Input::get('password'));

		$user->mail=$mail;
		$user->password=$password;
		$user->save();
		return Redirect::to('boom');
	}

	public function index(){
		//$article = Article::select (array('Id','title','updated_at'))->get();
		$articles = Article::paginate(5);
		return View::make('admin.index')->with('articles',$articles);
	}
	public function articleContent($id){
		//$id = $_GET['id'];

		$articleContent = Article::where('Id','=',$id)->first();
		//var_dump($articleContent);
		return \View::make('admin.articleContent')->with('article',$articleContent);
	}
	public function getUpdateArticle($id){
		
		$articleContent = Article::where('Id','=',$id)->first();
		return View::make('admin.articleUpdate')->with('article',$articleContent);
	}
	public function postUpdateArticle(){
		$id = Input::get('id');
		//var_dump($id);
		$title =  Input::get('title');
		//var_dump($title);
		$content = Input::get('content');
		//var_dump($content);
		$article = Article::where('Id','=',$id )->first();
		//var_dump($article);
		$article['title']=$title;
		$article['content']=$content;
		$article->save();
		return Redirect::to('boom');
	}

	public function postDeleteArticle(){
		$id = Input::get('id');
		var_dump($id);
		$article = Article::where('Id','=',$id )->first();
		//var_dump($article);
		$article->delete();
		return Redirect::back();
	}
	public function getAddArticle(){
		return View::make('admin.articleAdd');

	}
	public function postAddArticle(){
		$title=Input::get('title');
		$content = Input::get('content');
		$article  = new Article;
		$article['title'] = $title;
		$article['content']= $content;
		$article->save();
		return Redirect::to('admin');
	}
}
?>