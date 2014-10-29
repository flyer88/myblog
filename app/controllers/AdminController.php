<?php





class AdminController extends BaseController{
	/**
	**admin 登陆注册退出操作
	**/
	//登陆
	public	function login(){
		return \View::make('admin.login');
	}

	public function checkLogin(){
		$data = Input::all();
		//$user = User::find(1);
		$rules =[
		"mail" => "required|exists:user,mail"
		];
		$validator = Validator::make($data,$rules);

		if ($validator->fails()) {
			return Redirect::to('admin/regist')->withErrors($validator);
		}elseif (Auth::attempt(array('mail' => $data['mail'], 'password' => $data['password']))){
			return Redirect::to('admin');
		}else{
			return Redirect::to('admin/login')->with('error',"密码错误！！");
		}

		//echo $mail;
		//var_dump($user['mail']);
	}
	public function isLogin(){

		if (Auth::check()){
    		// 用户已经登陆...
		}
	}
	//注册
	public function regist(){
		return View::make('admin.regist');
	}
	public function registIn(){
		// $user  =  new User;

		// $mail = Input::get('mail');
		// $password = Hash::make(Input::get('password'));

		
		$data = Input::all();
		$rules  = ['mail'=>'required|email|unique:user,mail','password'=>'required|between:6,60'];
		$messages = ['unique'=>':attribute has been used'];
		$validator = Validator::make($data,$rules,$messages);
		if ($validator->fails()) {
			return Redirect::to('admin/regist')->withErrors($validator);
		}else {
			$user->mail=$mail;
			$user->password=$password;
			$user->save();
			return Redirect::route('admin.login');
		}
		//return Redirect::to('boom');
	}
	//登出
	public function logOut(){
		Auth::logout();
		return Redirect::to('/');
	}




	/**
	**对文章的操作
	**/
	//文章具体内容
	public function articleContent($id){
		//$id = $_GET['id'];

		$articleContent = Article::where('id','=',$id)->first();
		//var_dump($articleContent);
		return \View::make('admin.articleContent')->with('article',$articleContent);
	}

	//修改文章内容
	public function getUpdateArticle($id){
		
		$articleContent = Article::where('id','=',$id)->first();
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
		return Redirect::to('admin');
	}//
	//删除文章内容
	public function postDeleteArticle(){
		$id = Input::get('id');
		var_dump($id);
		$article = Article::where('id','=',$id )->first();
		//var_dump($article);
		$article->delete();
		return Redirect::back();
	}
	//添加文章内容
	public function getAddArticle(){

		return View::make('admin.articleAdd');

	}
	public function postAddArticle(){
		$flag = Input::get('flag'); 
		
		$title=Input::get('title');
		$content = Input::get('content');
		$article  = new Article;
		$article['flag']=$flag;
		$article['title'] = $title;
		$article['content']= $content;
		$article->save();
		return Redirect::to('admin');
	}


	/**
	** 不同类别文章的操作
	**/
	//主页面
	public function index(){
		//$article = Article::select (array('Id','title','updated_at'))->get();
		$articles = Article::paginate(10);
		return View::make('admin.show')->with('articles',$articles);
	}
	//文章类别选择控制器
	public function selectArticle($name){
		switch ($name) {
			case 'php':
				$articles = Article::where('flag','=','php')->paginate(2);
				//var_dump($articles);
				//echo $articles['flag'];
				return View::make('admin.show')->with('articles',$articles);
				break;

			case 'laravel':
				$articles = Article::where('flag','=','laravel')->first();
				return View::make('admin.index')->with('articles',$articles);
				break;

			case 'java':
				$articles = Article::where('flag','=','java')->first();
				return View::make('admin.index')->with('articles',$articles);
				break;

			case 'ubuntu':
				$articles = Article::where('flag','=','ubuntu')->first();
				return View::make('admin.index')->with('articles',$articles);
				break;	

			default:
				$articles = Article::paginate(10);
				return View::make('admin.show')->with('articles',$articles);
				break;
		}
	}
	
}
?>