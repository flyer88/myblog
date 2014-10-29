<div class="content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="row">
                  				  <div class="span12" id="title-header">
						<div class="page-header">
           						   	<section class="title-section">
						<h1>Hi, my name is  Flyer </h1>
						
						<!-- BEGIN BREADCRUMBS-->
							</section>
							<!-- .title-section -->                    
						</div>
					</div>
               			 </div>
				<div class="row">			
					<div class="span8 right" id="content">
						<!-- displays the tag's description from the Wordpress admin -->
						@include('home.article')	
					</div>
					
					<div class="span4 sidebar" id="sidebar">
						@include('_layouts.partials.widget-blackboard')		
						@include('_layouts.partials.widget-category')
               					@include('_layouts.partials.widget-calendar')       		 
		
                        				</div>
					
				</div>
			</div>
		</div>
	</div>
</div>