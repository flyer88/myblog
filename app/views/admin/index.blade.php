@extends('_layouts.default')
@section('body')

<div class="jumbotron" >
  <h1 style="margin-left:150px">Admin</h1>
</div>
 <a href="{{ route('admin.article.add') }}">add</a>
 	@foreach ($articles as $article)
                                 <div class="title"> <a href="{{ route('admin.article.id',$article->Id) }}">{{ $article->title}}</a></div>
                                 <div>{{$article->updated_at}}</div>
                                 <a href="{{ route('admin.article.update.id',$article->Id) }}">update</a>


                                {{Form::open(array('route'=>'admin.article.delete')) }}
                                <input  hidden = "hidden" value="{{$article->id}}" name="id">
		<input type="submit"  value="delete">
		{{ Form::close() }}
                                <hr>                
                @endforeach
             <div  class="linkscontainer">
                         {{$articles->links()}}
                          </div>



@stop