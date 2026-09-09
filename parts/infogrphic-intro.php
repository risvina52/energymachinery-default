<section class="infogrphic-page-intro" >
	<?php
            // Check the fullwidth toggle
            $is_fullwidth = get_field('cwrim_fullwidth');
            $wrap_class = $is_fullwidth ? 'inner-wrap-fullwidth' : 'inner-wrap';
        ?>
        <div class="<?php echo esc_attr($wrap_class); ?>">
	    <?php if(get_field('pim_heading')):?> 
	    	<h1 class="page-header"><?php echo get_field('pim_heading');?></h1>
		<?php endif;?>  
		<?php if(get_field('sub_heading')):?> 
	    	<div class="page-header-sub"><?php echo get_field('sub_heading');?></div>
		<?php endif;?>          
	</div>

</section>