
<section class="gdd-006-slider-b site-intro-new" style="<?php if(get_field('si_bg_image')):?>background-image:url(<?php echo get_field('si_bg_image');?>);<?php endif;?>">
	<div class="inner-wrap-fullwidth">
		<div class="si-slider-new">
			<?php if( have_rows('si_item') ): while ( have_rows('si_item') ) : the_row(); ?>
			<div class="ssn-wrapper">
				<div class="ssn-left">
					<?php if(get_sub_field('title')):?>
	    <h1 class="si-heading-new"><?php echo get_sub_field('title');?></h1>
	   
		<?php endif;?>
		<?php if(get_sub_field('text')):?>
	    <p class="si-text-new"><?php echo get_sub_field('text');?></p>
	   
		<?php endif;?>
		<?php 
        $cta = get_sub_field('cta');
                            if( $cta ): 
                                $cta_url = $cta['url'];
                                $cta_title = $cta['title'];
                                $cta_target = $cta['target'] ? $cta['target'] : '_self';
                            ?>
	
		<a href="<?php echo esc_url($cta_url); ?>" class="btn si-btn si-btn-new" target="<?php echo esc_attr( $cta_target ); ?>">
		<span><?php echo esc_html($cta_title); ?></span></a>
	
	<?php endif; ?>  

				</div>
				<div class="ssn-right">
					<?php if(get_sub_field('image')) : ?><?php $si_image = get_sub_field('image'); ?>
                <figure class="si-img-wrap">
                	<img src="<?php echo $si_image['url']; ?>" alt="<?php echo $image['title']; ?>" title="<?php echo $si_image['title']; ?>" width="<?php echo $si_image['width']; ?>" height="<?php echo $si_image['height']; ?>">
                </figure>
                <?php endif; ?>
				</div>
			</div>
			<?php endwhile; ?>
					<?php endif; ?>	
		</div>
	</div>
</section>