@extends('_layouts.default')
@section('body')

<div class="jumbotron" >
  <h1 style="margin-left:150px">Update</h1>
</div>

 	
	{{Form::open(array('route'=>'admin.article.add')) }}
	
	<input type="text" name="title"></br>

	<textarea name="content"></textarea></br>
	
	<input type="submit" >
	{{ Form::close() }}

                                     
@stop
