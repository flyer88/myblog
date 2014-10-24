   <!doctype html>
<html>
<head>
  <meta charset="utf-8">

  <title>flyer</title>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>


<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/home-index.css') }}" rel="stylesheet">
  

</head>
<body>

 <div  class="picture">

  </div>
         
                     <div class="container-article">
                       @foreach ($articles as $article)
                                 <div class="title"> <a href="{{ route('boom') }}">{{ $article->title}}</a></div>
                            <div class="content"> {{ substr($article->content, 0,200)}}</div>
                                <a href="{{ route('boom')}}"> ...>>see more</a>  
                                 <hr>                
                        @endforeach
                           <div  class="linkscontainer">
                         {{$articles->links()}}
                          </div>
                        </div>


 
 
<div class="container-notice">
  
</div>
</body>
</html>
