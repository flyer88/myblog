@extends('_layouts.default')
@section('body')

<div class="jumbotron" >
  <h1>Admin</h1>
  
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
</div>
<div class="container">
<div class="row">
                <div class="col-md-9">
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
                <div class="col-md-3">
                       <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix" role="complementary">
                         <ul class="nav bs-docs-sidenav">
                                             <li class="active">
                                                 <a href="#overview-doctype">所有文章</a>
                                            </li>
                                            <li class="">
                                                <a href="#overView-doctype">PHP</a>
                                            </li>
                                              <li class="">
                                                <a href="#overView-doctype">Laravel</a>
                                            </li>
                                             <li class="">
                                                <a href="#overView-doctype">Ubuntu</a>
                                            </li>
                                             <li class="">
                                                <a href="#overView-doctype">Java</a>
                                            </li>
                                         
                                             <li>
                                                <a  href="{{ route('admin.logout') }}" >登出</a>
                                             </li>
                                             <li>
                                                 <a  href="{{ route('admin.article.add') }}" >添加文章</a>
                                            </li>           
                                               <li> 
                                                <a class="back-to-top" href="#top" style=" text-align:center">返回顶部</a>
                                             </li>                
                         </ul>

                            
                        </div> 
                </div>
</div>
</div>





@stop