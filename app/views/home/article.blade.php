<article id="post-2051" class="post-2051 post type-post status-publish format-image has-post-thumbnail hentry category-life tag-music tag-programming post__holder cat-5-id">
	
	<div class="post-thumb clearfix">										
		<div class="clear"></div>	        
	</div>
	@foreach ($articles as $article) 
	<div class="row-fluid">
		<div class="span1">
			<div class="post_date">
				<div class="post_date">
					<span>{{date("Y")}}</span>
				</div>
			</div>
		</div>
		
		<div class="span11 content-column">
			<header class="post-header">	
				<h1 class="post-title"><a class="title" href="{{ route('article.id',$article->id) }}" style="text-decoration: none;">{{$article->title}}</a></h1>
			</header>
			<!-- Post Meta -->
			<div class="meta-space">
				<span>By <a href="" title="Posts by admin" rel="author">flyer</a></span>
				<span class="post_category"><i class="icon-cloud-2"></i><a style="text-decoration: none;" href="" title="View all posts in Life">{{$article->flag}}</a></span>			
			</div>
			<!--// Post Meta -->					
			<!-- Post Content -->
			<div class="post_content">

				<div class="excerpt">			
					 {{ substr($article->content, 0,200)}}
				</div>
				<div class="clear"></div>
			</div>
		</div>	
	</div>	
	@include('_layouts.partials.share')
	<hr>
	@endforeach
	<div  class="linkscontainer">
                         {{$articles->links()}}
               </div>
<!-- .share-buttons -->

<!-- //.share-buttons -->
</article><!--//.post__holder-->