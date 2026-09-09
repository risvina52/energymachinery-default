
		<?php wp_footer(); ?>
	</div>
	<!-- Site Wrap End -->
	<?php $blog_id = get_option('page_for_posts'); ?>
	<?php if(get_field('before_the_body','options')):?>
		<?php echo get_field('before_the_body','options'); ?>
	<?php endif;?>
	<?php if(is_home() && get_field('before_the_body', $blog_id)):?>
        <?php echo get_field('before_the_body', $blog_id); ?>
    <?php endif ?>
	<?php if(get_field('before_the_body')):?>
		<?php echo get_field('before_the_body'); ?>
	<?php endif;?>
    </body>
</html>