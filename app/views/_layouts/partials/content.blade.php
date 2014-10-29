		<div class="row-fluid">		
			<div class="span11 content-column" style="margin-left:50px">
				<header class="post-header">	
					<h1 class="post-title"><a href="" title="Permalink Hello world!" style="text-decoration: none;">{{$article->title}}</a></h1>
				</header>
				<!-- Post Meta -->
				<div class="meta-space">
					<span>By <a href="" title="Posts by admin" rel="author">flyer</a></span>
					<span class="post_category"><i class="icon-cloud-2"></i><a href="" title="View all posts in Life">{{$article->flag}}</a></span>			
				</div>
				<!--// Post Meta -->					
				<!-- Post Content -->
				<div class="post_content">
					<div class="excerpt">			
						@include('md.content')
					</div>
					
					<div class="readmore-button">
						<a href="" class="btn22 btn-1 btn-1c" style="text-decoration:none" style="text-decoration: none;">更多</a>
					</div>	
					<div class="clear"></div>
				</div>
			</div>	
		</div>	
		<!-- .share-buttons -->
		<div style="margin-left:50px">
			@include('_layouts.partials.share')
		</div>
		
		<!-- //.share-buttons -->
