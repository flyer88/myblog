@extends('_layouts.default')
@section('body')
<div>
  
</div>
<div class="container" >

               <div class="container-article">
                	<div class="title">{{ $article->title}}</div>
                   <div class="content"> {{$article->content}}</div>
                 </div>           
</div>


<div>
{{ Form::open(array('url' => '')) }}
    <input type="text"><br>
    <textarea></textarea>
    <input type="submit" class="">
{{ Form::close() }}
</div>
@stop

