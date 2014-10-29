@extends('_layouts.default')
@section('body')
<div class="jumbotron" >
  <h1 style="margin-left:150px">{{$article->title}}</h1>
</div>

 	
	{{Form::open(array('route'=>'admin.article.update')) }}
	<input hidden="hidden" name=id value="{{$article->id}}">
	<div class="container">
	<input type="text" class="form-control"  value="{{$article->title}}" name="title"></br>
	<textarea name="content" class="form-control  form">{{$article->content}}</textarea></br>
	
	</div>
	<input type="submit"  class="btn btn-primary admin-btn-add" style="margin-left:87px">
	{{ Form::close() }}

                                     
@stop
