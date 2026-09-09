<div class="page-intro">
	

<!-- Page Intro Title -->
	    <?php if(is_home()):?>
	    <div class="blog-pg">
	    <div class="inner-wrap-fullwidth">	
        <h1 class="pi-heading"><?php echo get_field('pi_heading', 7); ?></h1>
    	</div>
    	</div>	

	    <?php elseif(is_404()):?>
	    <div class="inner-wrap-fullwidth">	
	  	<h1 class="page-header">404-Page not found</h1>
	  	</div>

	    <?php elseif(is_search()):?>
	  	<div class="inner-wrap-fullwidth">
	  	<h1 class="page-header">Search Results for '<?php echo get_search_query(); ?>'</h1>
	  	</div>

	    <?php elseif(get_field('pi_heading')):?> 
	    <div class="inner-wrap-fullwidth">
	    <h1 class="page-header"><?php echo get_field('pi_heading');?></h1>
		</div>
		

	    <?php else: ?>
	    <div class="inner-wrap-fullwidth">	
		<h1 class="page-header"><?php the_title(); ?></h1>
		</div>
		<?php endif;?>
	            


</div>