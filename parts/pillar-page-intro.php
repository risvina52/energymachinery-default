<section class="pillar-page-intro" style="background-image: url('<?php echo get_field('pim_background_image');?>');">
	<?php
            // Check the fullwidth toggle
            $is_fullwidth = get_field('cwrim_fullwidth');
            $wrap_class = $is_fullwidth ? 'inner-wrap-fullwidth' : 'inner-wrap';
        ?>
        <div class="<?php echo esc_attr($wrap_class); ?>">
	    <?php if(get_field('pim_heading')):?> 
	    	<h1 class="page-header"><?php echo get_field('pim_heading');?></h1>
		<?php endif;?>           
	</div>
	<?php if( have_rows('isn_link_wrap') ): ?>
		<section class="internal-links-nav">
			<div class="isn-wrap">
				<ul class="internal-links-wrap">
					<?php while ( have_rows('isn_link_wrap') ) : the_row(); ?>
					<li class="<?php echo get_row_index() == 1 ? 'pillar-active' : '' ?>">
						<?php $link = get_sub_field('isn_add_link');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="super-smooth"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>	
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</section>
		<?php endif; ?>
</section>