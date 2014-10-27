@extends('_layouts.partials.row-col-md')
                  @section('head')
                  <div class="jumbotron">
                  <h1>{{$article->title}}</h1>
                  </div>
                 @stop


                  @section('left')
                    <div class="content">
                          @include('md.content')
                       </div>
                    @stop

                    @section('right')
             
                                   @include('_layouts.partials.home-float-bar')
                      @stop
                     





<div>
{{ Form::open(array('url' => '')) }}
    <input type="text"><br>
    <textarea></textarea>
    <input type="submit" class="">
{{ Form::close() }}
</div>
@stop

