@extends('_layouts.partials.row-col-md')
                  @section('head')
                  <div class="jumbotron">
                  <h1>{{$article->title}}</h1>
                  @include('_layouts.partials.home-head')
                  </div>
                 @stop


                  @section('left')
                    <div class="content">
                          @include('md.content')
                       </div>
                    @stop

                    @section('right')
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
                      @stop
                     






