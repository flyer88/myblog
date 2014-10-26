@extends('_layouts.default')
@section('body')

<div class="jumbotron" >
  <h1 style="margin-left:150px">Update</h1>
</div>

 	
	{{Form::open(array('route'=>'admin.article.update')) }}
	<input hidden="hidden" name=id value="{{$article->id}}">
	<input type="text" value="{{$article->title}}" name="title"></br>
	<textarea name="content">{{$article->content}}</textarea>
	<input type="submit" >
	{{ Form::close() }}

                                     
@stop
