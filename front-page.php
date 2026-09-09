<?php

	/*
		Template Name: Front Page
	*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
       
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<!--Site Content Starts-->
	<section class="site-content redesign-page" role="main">	
	<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/flexible-content' ) ); ?>        
	</section>
	<!--Site Content Ends-->

<?php endwhile; ?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>