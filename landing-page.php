<?php

	/*
		Template Name: Landing Page
	*/
?>
 
    
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
       
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<!--Site Content-->
	<section class="site-content" role="main">
	    <div class="inner-wrap-fullwidth lpt-inner-wrap">

	        <article class="site-content-primary-fullwidth"> 
	       		<div class="lpt-wrapper">
   			 		<?php if( get_field('lpt_content')): ?>
   						<div class="lpt-content-sec"><?php echo get_field('lpt_content'); ?></div>
   					<?php endif; ?>
			 		<?php if( get_field('lpt_form')): ?>
						<div class="lpt-form"><?php echo get_field('lpt_form'); ?></div>
					<?php endif; ?>
	       		</div>	                
	        </article>

		</div>
		<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/flexible-content' ) ); ?>   

	</section>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/slidebox' ) ); ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>