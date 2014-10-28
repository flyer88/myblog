@extends('_layouts.partials.row-col-md')
                  @section('head')
                  <div class="jumbotron">
                  <h1>{{$article->title}}</h1>
                  @include('_layouts.partials.admin-head')
                  </div>
                 @stop


                  @section('left')
                    <div class="content">
                          @include('md.content')
                       </div>
                    @stop

                    @section('right')
             
                                   
                      @stop
                     





@stop

