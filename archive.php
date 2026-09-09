<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts() 
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<section class="site-content blog-column" role="main">
    <div class="inner-wrap-fullwidth">
    	<article class="site-content-primary">
		<?php if ( have_posts() ): ?>
			<?php if ( is_day() ) : ?>
			<h2 class="page-header archive-page-heading">Archive: <?php echo  get_the_date( 'D M Y' ); ?></h2>							
			<?php elseif ( is_month() ) : ?>
			<h2 class="page-header archive-page-heading">Archive: <?php echo  get_the_date( 'M Y' ); ?></h2>	
			<?php elseif ( is_year() ) : ?>
			<h2 class="page-header archive-page-heading">Archive: <?php echo  get_the_date( 'Y' ); ?></h2>	
			<?php else: ?>
			<h2 class="page-header archive-page-heading">No posts to display</h2>	
		<?php endif; ?>							
			<article class="site-content-primary"> 
			<?php while ( have_posts() ) : the_post(); ?>
				<article>
					<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<?php the_author() ?><span class="meta-sep"> | </span><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php //the_time(); ?></time>
					<?php the_excerpt(); ?>
					<div class="categoriess">	
					<p>Categories: <?php the_category(); ?><span class="meta-sep"> | </span><?php comments_popup_link('Comments', '1 Comment', '% Comments'); ?></p>
					</div>
				</article>
			<?php endwhile; ?>
			</article>
			<?php endif; ?>
		<?php wp_pagenavi(); ?>
		</article>
		<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-blog') ); ?>
	</div>
</section>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>