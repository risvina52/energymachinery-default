<?php
/**
 * The template for displaying Category Archive pages
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
		<h2 class="page-header archive-page-heading">Category Archive: <?php echo single_cat_title( '', false ); ?></h2>
		<?php while ( have_posts() ) : the_post(); ?>

				<article>
					<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<div class="post-meta">
						<?php the_author() ?><span class="meta-sep"> | </span><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php //the_time(); ?></time>
					</div>
					<?php the_excerpt(); ?>
					<div class="categoriess">	
					<p>Categories: <?php the_category(); ?><span class="meta-sep"> | </span><?php comments_popup_link('Comments', '1 Comment', '% Comments'); ?></p>
					</div>
				</article>
		<?php endwhile; ?>

		<?php else: ?>
		<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
		<?php endif; ?>
		<?php wp_pagenavi(); ?>
		</article>
		<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-blog') ); ?>
	</div>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>