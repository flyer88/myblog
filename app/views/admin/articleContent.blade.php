@extends('_layouts.default')
@section('body')

<div class="jumbotron" >
  <h1 style="margin-left:150px">Content</h1>
</div>
	
                                 <div class="title"> {{ $article->title}}</div>
                                 <div > {{ $article->content}}</div>
                                 <div>{{$article->updated_at}}</div>
                                    
@stop