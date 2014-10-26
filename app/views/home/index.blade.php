@extends('_layouts.default')
@section('body')
<div class="jumbotron">
  <h1>Hello, world!</h1>
  <p>...</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
</div>
  <div class="container">
         <div class="row">
                <div class="col-md-9">
                     <div class="container-article">
                       @foreach ($articles as $article)
                                 <div class="title"> <a href="{{ route('article.id',$article->id) }}">{{ $article->title}}</a></div>
                            <div class="content"> {{ substr($article->content, 0,200)}}</div>
                                <a href="{{ route('boom')}}"> ...>>see more</a>  
                                 <hr>                
                        @endforeach
                           <div  class="linkscontainer">
                         {{$articles->links()}}
                          </div>
                       </div>
                    </div>
                  <div class="col-md-3">
                        <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix" 
                        role="complementary">
                          <ul></ul>
                          <a  class="back-to=top"href="#top">返回顶部</a>
                        </div> 
                  </div>
          </div>             
</div>

@stop