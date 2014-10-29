@extends('_layouts.default')
@section('body')
      <div style="margin-top:50px">
        @include('_layouts.partials.head-bar')
      </div>
       <div>
         @include('_layouts.partials.content')
       </div>   
                      @include('md.comment')                    
                                   <div>
                                       {{ Form::open(array('route'=>'article.comment')) }}
                                       <input hidden="hidden" name='id' value= "{{$article->id}}">
                                       <input type="text" name='name' placeholder="name">
                                       <input type="text" name='title' placeholder="title"><br>
                                       <textarea name="content" placeholder='content'></textarea>
                                       <input type="submit" class="">
                                       {{ Form::close() }}
                                    </div>
               
                     
@stop('body')





