<div class="lp-page-intro">
  <div class="inner-wrap">
    <div class="rows-of-2">
      <div>
        <?php if ( get_field('lp_pi_heading') ) : ?>
          <h1 class="page-header"><?php echo esc_html( get_field('lp_pi_heading') ); ?></h1>
        <?php endif; ?>

        <?php if ( get_field('pi_left_content') ) : ?>
          <div class="sub-content"><?php echo get_field('pi_left_content'); ?></div>
        <?php endif; ?>
      </div>

      <?php if ( get_field('pi_right_content') ) : ?>
        <div class="pi_right_content"><?php echo get_field('pi_right_content'); ?></div>
      <?php endif; ?>
    </div>
  </div>
</div>
