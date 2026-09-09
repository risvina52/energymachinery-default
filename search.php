<?php
/**
 * Search results page
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
        	<h1 class="page-header archive-page-heading">Search Results for: <?php echo get_search_query(); ?></h1>
			<?php if ( have_posts() ): ?>                	
				<?php while ( have_posts() ) : the_post(); ?>
					<article>
						<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						
						<?php the_excerpt(); ?>
					</article>
				<?php endwhile; ?>
				<?php else: ?>
				<h2>No results found for '<?php echo get_search_query(); ?>'</h2>
			<?php endif; ?>
			
		<?php wp_pagenavi(); ?>
		</article>
		<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-blog') ); ?>
	</div>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>