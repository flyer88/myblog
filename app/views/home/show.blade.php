@extends('_layouts.partials.row-col-md')
@section('head')
<div class="jumbotron">
  <h1>Hello, world!</h1>
  <p>...</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
</div>
<div class="container">
@stop
            
                @section('left')
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
                       @stop

                    @section('right')
             
                                   @include('_layouts.partials.home-float-bar')
                     @stop
                     

</div>
