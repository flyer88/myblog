@extends('_layouts.partials.row-col-md')
@section('head')
<div class="jumbotron">
  <a href={{ route('boom') }} style="text-decoration:none"><h1 style="cursor:pointer">Hello, world!</h1><a/>
  <p>flyer</p>

</div>
<div class="container">
@stop
            
                @section('left')
                     <div class="container-article">
                       @foreach ($articles as $article)
                                 <div class="title"> <a href="{{ route('article.id',$article->id) }}">{{ $article->title}}</a></div>
                            <div class="content"> @include('md.content-sub')</div>
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
    