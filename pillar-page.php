<?php

	/*
		Template Name: Pillar Page
	*/
?>
 
    
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/pillar-page-intro' ) ); ?>
<?php $thecontent = get_the_content(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<!--Site Content-->
	<section class="site-content" role="main">
	    <div class="inner-wrap-fullwidth <?php if(empty($thecontent)) : ?>no-padding<?php endif;?>">
			<article class="site-content-primary-fullwidth"> 
	       		<?php the_content(); ?> 						
						<?php if (is_page( '9' )) : ?>
							<!--Sitemap Page-->
						   <ul>
						    <?php
						    // Add pages you'd like to exclude in the exclude here
						    wp_list_pages(
						    array(
						    'exclude' => '',
						    'title_li' => '',
						    )
						    );
						    ?>
						   </ul>
						<?php endif; ?>                    
	        </article>		

		</div>
		<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/flexible-content' ) ); ?>
	</section>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/slidebox' ) ); ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>