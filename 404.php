<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section class="site-content" role="main">
	    <div class="inner-wrap-fullwidth">
	        <article class="site-content-primary">

				<p>Please check the URL for proper spelling and capitalization. If you're having trouble locating a destination on our site, try looking on our <a href="<?php bloginfo('url'); ?>/sitemap">sitemap</a> or <a href="<?php bloginfo('url'); ?>">click here</a> for the home page.</p>

				<p>If you need further assistance please Email us at <a href="mailto:info@energymachinery.com">info@energymachinery.com</a>.</p>
	        </article>
	    </div>
	    <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar','parts/shared/flexible-content'  ) ); ?>
	</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>