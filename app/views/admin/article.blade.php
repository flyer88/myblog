<article id="post-2051" class="post-2051 post type-post status-publish format-image has-post-thumbnail hentry category-life tag-music tag-programming post__holder cat-5-id">
	
	<div class="post-thumb clearfix">										
		<div class="clear"></div>	        
	</div>
	@foreach ($articles as $article) 
	<div class="row-fluid">
		<div class="span1">
			<div class="post_date">
				<div class="post_date">
					<span>03</span>2014 Jan
				</div>
			</div>
		</div>
		
		<div class="span11 content-column">
			<header class="post-header">	
				<h1 class="post-title"><a class="title" href="{{ route('admin.article.id',$article->id) }}" style="text-decoration: none;">{{$article->title}}</a></h1>
			</header>
			<!-- Post Meta -->
			<div class="meta-space">
				<span>By <a href="" title="Posts by admin" rel="author">flyer</a></span>
				<span class="post_category"><i class="icon-cloud-2"></i><a style="text-decoration: none;" href="" title="View all posts in Life">{{$article->flag}}</a></span>			
			</div>
			<!--// Post Meta -->					
			<!-- Post Content -->
			<div class="post_content">
				<div class="readmore-button">
					<a href="{{ route('admin.article.update.id',$article->id) }}" class="btn22 btn-1 btn-1c" style="text-decoration:none; float:left">修改文章</a>
				</div>	
				                 {{ Form::open(array('route'=>'admin.article.delete')) }}
                                       				<input hidden="hidden" name='id' value= "{{$article->id}}">
                                     				 <div class="readmore-button">
                                     				 <a class="btn22 btn-1 btn-1c" style="width:110px;height:59px;margin-left:20px;text-decoration:none">
                                     				 	<input type="submit"  value="删除文章" style="background-color:rgba(255,255,255,0);border:0px;width:110px;height:59px;display:block;margin-top:-15;margin-left:-20;vertical-align:center">
                                     				</a> 	
						</div>

                                     			  {{ Form::close() }}
				
			</div>
		</div>	
	</div>	

	<hr>
	@endforeach
	<div  class="linkscontainer">
                         {{$articles->links()}}
               </div>
<!-- .share-buttons -->

<!-- //.share-buttons -->
</article><!--//.post__holder-->