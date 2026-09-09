<!--Secondary Content-->

<aside class="site-content-secondary">
<div class="side-search">
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/search-module' ) ); ?>
</div>
<h3>Recent Posts</h3>
<ul class="blank-list">
<?php wp_get_archives('type=postbypost&limit=5'); ?>
</ul>
<h3>Recent Comments</h3>
<ul class="blank-list">
	<li>&nbsp;</li>
</ul>
<h3><?php _e('Archives'); ?></h3>
<ul class="blank-list">
<?php wp_get_archives('type=monthly&limit=5'); ?>
</ul>
<h3><?php _e('Categories'); ?></h3>
<ul class="blank-list">
<?php wp_list_cats(); ?>
</ul>
</aside>