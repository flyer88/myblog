@extends('_layouts.partials.row-col-md')
@section('head')
<div class="jumbotron">
  <h1 >Admin</h1>
  <h2>articles</h2>
  
</div>
<div class="container">
@stop
            
                @section('left')
                     <div class="container-article">
                       
                          @foreach ($articles as $article)
                        
                                        
                                        <a href="{{ route('admin.article.id',$article->id) }}" class="admin-title">{{ $article->title}}</a><br>
                                         <div>{{$article->updated_at}}</div>
                                        <a href="{{ route('admin.article.update.id',$article->id) }}" class="admin-btn-fix btn btn-primary btn-sm active">修改</a>

                                        {{Form::open(array('route'=>'admin.article.delete')) }}
                                            <input  hidden = "hidden" value="{{$article->id}}" name="id">
                                            <input type="submit"  value="删除" class="admin-btn-delete btn btn-primary btn-sm active">
                                        {{ Form::close() }}
                                        </br>
                                       
                                                  
                               
                                <hr>
                        @endforeach
                           <div  class="linkscontainer">
                         {{$articles->links()}}
                          </div>
                       </div>
                       @stop

                    @section('right')
             
                                   @include('_layouts.partials.admin-float-bar')
                     @stop
                     

</div>




