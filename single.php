<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<!--Site Content-->
	<section class="site-content blog-column" role="main">
	    <div class="inner-wrap-fullwidth">
	    	
	        <article class="site-content-primary">
	        	<h1 class="page-header blog-page-heading"><?php the_title(); ?></h1>
				<div class="post-meta">
					<?php the_author() ?><span class="meta-sep"> | </span><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php //the_time(); ?></time>
				</div>
				
				<?php the_content(); ?> 
				<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/flexible-content' ) ); ?>
				<!-- <hr>
				<p><?php the_tags(); ?></p>
				<hr> -->
				<div class="categoriess">	
					<p>Categories: <?php the_category(); ?><span class="meta-sep"> | </span><?php comments_popup_link('Comments', '1 Comment', '% Comments'); ?></p>
				</div>
				<?php comments_template( '', true ); ?>
				<div class="nex-prev-post">
					<div><?php previous_post_link( '<span class="meta-nav">←</span> %link', '%title', true ); ?></div>
					<div><?php next_post_link( '%link <span class="meta-nav">→</span>', '%title', true ); ?></div>
				</div>
	        </article>
	       	<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-blog') ); ?>
	    </div>
	</section>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>