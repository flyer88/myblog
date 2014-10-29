
<div class="span12">
	<!-- BEGIN MAIN NAVIGATION  -->
	<div class="menu-button"><i class="icon-menu"></i>
		<a style="position:relative;z-index:100;color:#222222; margin-left:12px;display:inline-block;" class="popup-with-zoom-anim toggle-button md-trigger" href="#small-dialog"><i class="icon-search-1"></i></a>

		<span class="touch-button"><i class="icon-down-open-big"></i></span></div>
		<nav class="nav nav__primary clearfix"> 
			<ul data-breakpoint="800" id="menu-hercules" class="flexnav with-js opacity lg-screen">
				<li >
					<a href="{{ route('admin') }}">Admin<span></span></a>
					<span class="touch-button"><i class="icon-down-open-big"></i></span></li>
					
					<li >
						<a href="{{ route('admin.article.type.name','php') }}">PHP<span></span></a>
						<span class="touch-button"><i class="icon-down-open-big"></i></span></li>							
						<li>
							<a href="{{ route('admin.article.type.name','laravel') }}">Laravel<span></span></a>
							<span class="touch-button"><i class="icon-down-open-big"></i></span></li>
							
							<li >
								<a href="{{ route('admin.article.type.name','ubuntu') }}">Ubuntu<span></span></a></li>
								<span class="touch-button"><i class="icon-down-open-big"></i></span></li>								
								<li >
									<a href="{{ route('admin.article.type.name','java') }}">Java<span></span></a></li>
									<span class="touch-button"><i class="icon-down-open-big"></i></span></li>

									<li>
										<a href="{{ route('admin.logout','') }}">SIGN OUT<span></span></a><span class="touch-button"><i class="icon-down-open-big"></i></span></li>
									</ul>
								</nav>
								<!-- END MAIN NAVIGATION -->
							</div>	
							 	<div class="container" style="float:right"　>
		<div class="readmore-button">
	<a href="{{ route('admin.article.add') }}" class="btn22 btn-1 btn-1c" style="margin:0 atuo">添加文章</a>
	</div>
						</div>	