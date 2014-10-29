@extends('_layouts.default')
@section('body')

<div class="jumbotron" >
  <h1 style="margin-left:150px">Regist in?</h1>
</div>
<div style="text-align:center;">
	{{$errors->has('mail')?$errors->first('mail'):''}}<br>
	{{$errors->has('password')?$errors->first('password'):''}}
</div>

<div class="login-container">

	{{Form::open(array('route'=>'admin.regist')) }}
	<div class="input-group" >
  		<span class="input-group-addon">mail</span>
  		
  		<input type="text" class="form-control" placeholder="Username" name="mail">

  		

	</div>
	
	<div class="input-group" >
  		<span class="input-group-addon">pwd</span>
 	 	<input type="password" class="form-control" placeholder="Password" name="password"> 	 	
	</div>
	
  	<button type="submit" class="btn btn-default">Submit</button>
	{{ Form::close() }}
         

</div>


@stop