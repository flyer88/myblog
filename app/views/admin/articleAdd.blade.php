@extends('_layouts.default')
@section('body')

<div class="jumbotron" >
  <h1 style="margin-left:150px">Add</h1>
</div>

	

	{{Form::open(array('route'=>'admin.article.add')) }}
	@include('_layouts.partials.radio')
	<div class="container">
	<input type="text" name="title" class="form-control" placeholder="文章标题"></br>
 	</div>   
 	 <div class="container">
	<textarea name="content" class="form-control admin-form-content" placeholder="文章内容"></textarea></br>
	</div>
	<input type="submit"  class="btn btn-primary admin-btn-add" style="margin-left:86px" value="发表">
	{{ Form::close() }}


                                 
@stop