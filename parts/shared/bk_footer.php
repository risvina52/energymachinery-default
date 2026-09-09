<!-- Our Partners Module Starts -->
  <section class="our-partners-module <?php if(!is_front_page()):?>dest-opm<?php endif;?>">
      <div class="inner-wrap-fullwidth">
        <?php if( get_field('opm_heading','option')): ?> 
        <h2 class="opm-heading"><?php echo get_field('opm_heading','option'); ?></h2>
        <?php endif; ?> 

        <div class="opm-wrap">
          <?php if( have_rows('opm_partners_buckets','option') ): while ( have_rows('opm_partners_buckets','option') ) : the_row(); ?>
          <?php
          $opm_link = get_sub_field('opm_link','option');
          if($opm_link):
          $link_url = $opm_link['url'];
          $link_title = $opm_link['title'];
          $link_target = $opm_link['target'] ? $opm_link['target'] : '_self';
           ?> 
          <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr( $link_target ); ?>" rel="noopener noreferrer">

            <?php if(get_sub_field('opm_image','option')) : ?><?php $opm_image = get_sub_field('opm_image','option'); ?>
            <img src="<?php echo $opm_image['url']; ?>" class="off" alt="<?php echo $opm_image['title']; ?>" title="<?php echo $opm_image['title']; ?>">
            <?php endif; ?>

            <?php if(get_sub_field('opm_hover_image','option')) : ?><?php $opm_hover_image = get_sub_field('opm_hover_image','option'); ?>
            <img src="<?php echo $opm_hover_image['url']; ?>" class="on" alt="<?php echo $opm_hover_image['title']; ?>" title="<?php echo $opm_hover_image['title']; ?>">
            <?php endif; ?>

          </a>
        <?php endif; ?>   
          <?php endwhile; ?><?php endif; ?>
        </div>
      </div>  
  </section>
<!-- Our Partners Module Ends -->

<!-- About Us Starts -->
<section class="about-us-module gdd-100-b" 
  <?php if (get_field('au_background','option')): ?>style="background-image: url(<?php echo get_field('au_background','option'); ?>);"
  <?php endif ?>>
  <div class="inner-wrap">
    <div class="au-left-wrap">
      <?php if( get_field('au_header','option')): ?>
        <h2 class="au-header"><?php echo get_field('au_header','option'); ?></h2>
      <?php endif; ?>
      <?php if( get_field('au_description','option')): ?>
        <p class="au-description"><?php echo get_field('au_description','option'); ?></p>
      <?php endif; ?>
      <?php if (have_rows('au_content_item','option')): ?>
      <?php while (have_rows('au_content_item','option')): the_row();?>
      <div class="au-item-wrap">
        <div class="au-item-left">
        <?php $au_item_title = get_sub_field('au_item_title','option');?>
        <?php
        $au_item_img = get_sub_field('au_item_img','option');
        if (get_sub_field('au_item_img','option')): ?>
        <img class="astcm-right-icon" src="<?php echo $au_item_img['url']; ?>"
          alt="<?php echo $au_item_img['alt']; ?>" title="<?php echo $au_item_img['alt']; ?>" width="<?php echo $au_item_img['width']; ?>" height="<?php echo $au_item_img['height']; ?>">
        <?php endif ?>
        </div>
        <div class="au-item-right">
          <h3 class="au-title"><?php echo $au_item_title; ?></h3>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif ?>
    <?php 
    $link = get_field('au_cta_link','option');
    if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'] ? $link['title'] : 'Subheader';
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn au-btn" href="<?php echo esc_url( $link_url ); ?>"
      target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
  </div>
  <div class="au-right-wrap">
    <div class="au-video">
      <a href="<?php echo get_field('au_video_link','option'); ?>?rel=0" class="popup-youtube" aria-label="<?php echo get_field('au_header','option'); ?>">
        <figure>
          <?php $image = get_field('au_video_img','option');
              if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="374" alt="<?php echo esc_attr($image['alt']); ?>"
            title="<?php echo esc_attr($image['title']); ?>" />
          <?php endif; ?>
        </figure>
      </a>
    </div>
  </div>
  </div>
</section>

<!--Site Footer Starts-->
<footer class="site-footer" role="contentinfo"  style="display:none;">
  <div class="sf-footer">
    <div class="inner-wrap-fullwidth">
      <?php if( get_field('global_company_name','option')): ?>	
      <p class="sf-company-name"><?php echo get_field('global_company_name','option'); ?></p>
      <?php endif; ?>
      <p class="address-info">
      	<?php if( get_field('global_address_one','option')): ?>
        <span class="sf_address_street"><?php echo get_field('global_address_one','option'); ?></span>
        <?php endif; ?>
        <span class="sf-divider">|</span>
        <?php if( get_field('global_address_two','option')): ?>
        <span class="sf_address_city"><?php echo get_field('global_address_two','option'); ?></span>
        <?php endif; ?>
      </p>
      <p class="address-info">
      	  <?php $string = get_field('global_toll_free','option');$string = preg_replace("/[^0-9]/", '', $string);?>	
          <span class="sf_phone">Toll Free: <a href="tel:<?php echo $string;?>" aria-label="Toll Free Number"><?php echo get_field('global_toll_free','option');?></a></span>
          <span class="sf-divider">|</span>
          <?php $string = get_field('global_phone_number','option');$string = preg_replace("/[^0-9]/", '', $string);?>
          <span class="sf_mob">Phone: <a href="tel:<?php echo $string;?>" aria-label="Phone Number"><?php echo get_field('global_phone_number','option');?></a></span>
          <?php if( get_field('global_fax','option')): ?>
          <span class="sf-divider">|</span>
          <span class="sf_fax">Fax: <a href="javascript:void(0);" tabindex="-1"><?php echo get_field('global_fax','option'); ?></a></span>
          <?php endif; ?>
          <span class="sf-med-divider">|</span> 
          <span class="sf-mail">Email: <a href="mailto:info@energymachinery.com" aria-label="Email Us" title="info@energymachinery.com" target="_blank">info@energymachinery.com</a></span>
          <?php
	      $global_website = get_field('global_website','option');
	      if($global_website):
	      $link_url = $global_website['url'];
	      $link_title = $global_website['title'];
	      $link_target = $global_website['target'] ? $global_website['target'] : '_self';
	      ?>
          <span class="sf-divider">|</span>
          <span class="sf-website"><a href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a></span>
          <?php endif; ?>
      </p>


      <p class="sf-links"><a href="/terms-of-service/" rel="nofollow" title="Privacy Policy">Terms of Service</a>|<a href="/privacy-policy/" rel="nofollow" title="Privacy Policy">Privacy Policy</a>|<a href="/sitemap/" title="Sitemap">Sitemap</a>|<a href="https://energymachinery.stage.thomasnet-navigator.com/sitemap" title="Catalog Index">Catalog Index</a></p>
    </div>
  </div>
  <div class="sf-copy">
    <div class="inner-wrap-fullwidth">
      <div class="sf-copyright">
        <span class="sf-copy-text"><span>Copyright © <?php echo date("Y"); ?></span> <span><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></span> <span>All Rights Reserved.</span></span>
        <span class="sf-copy-divider">|</span> 
        <span class="sf-powered-text">Site Created by <a href="https://business.thomasnet.com/" target="_blank" rel="nofollow" title="Thomas Web Solutions">Thomas Marketing Services</a> and Powered by <a rel="nofollow" target="_blank" href="https://business.thomasnet.com/product-data-solutions" title="Navigator Platform">Navigator Platform</a></span>
      </div>
    </div>
  </div>
</footer>
<!--Site Footer Ends-->    

<footer class="gdd-003-b site-footer" role="contentinfo"> 
  <div class="sf-footer">
    <div class="inner-wrap">
      <a href="<?php bloginfo('url'); ?>" class="sf-site-logo">
          <?php $logo = get_field('global_company_footer_logo','option');
          if( !empty($logo) ): ?>  
              <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['alt']; ?>" width="302" height="77">
          <?php endif;?>
        </a>
        <div class="sf-link-wrap">
          <?php 
$link = get_field('global_contact_link','option');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn sf-link1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
<?php 
$link = get_field('global_rfq_link','option');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn-alt sf-link2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
        </div>
        <div class="sf-nav-wrap">
          <?php wp_nav_menu(array(
        'menu'            => 'Footer Nav',
        'menu_class'      => 'sf-link',
        )); ?>
        </div>
      <div class="address-info">
        <span class="sf-mail"><a href="mailto:<?php echo get_field('global_email','option'); ?>" title="<?php echo get_field('global_email','option'); ?>" target="_blank"><?php echo get_field('global_email','option'); ?></a></span>   
        <?php $string = get_field('global_phone_number','option');$string = preg_replace("/[^0-9]/", '', $string);?>
          <span class="sf_mob"><a href="tel:<?php echo $string;?>" aria-label="Phone Number"><?php echo get_field('global_phone_number','option');?></a></span>     
        <?php $string = get_field('global_toll_free','option');$string = preg_replace("/[^0-9]/", '', $string);?> 
        <span class="sf_phone"><a href="tel:<?php echo $string;?>" aria-label="Toll Free Number"><?php echo get_field('global_toll_free','option');?></a></span> 
        <span class="sf-address"><?php if( get_field('global_address_one','option')): ?>
        <span><?php echo get_field('global_address_one','option'); ?></span>
        <?php endif; ?>|
        <?php if( get_field('global_address_two','option')): ?>
        <span><?php echo get_field('global_address_two','option'); ?></span>
        <?php endif; ?></span>
      </div>
    </div>
  </div>
  <div class="sf-copy">
    <div class="inner-wrap">
      <div class="sf-copyright">
        <span class="sfc-left"><span class="sf-copy-text"><span>Copyright © <?php echo date("Y"); ?></span> <a class="sf-comp-name" href="<?php bloginfo( 'url' ); ?>">Energy Machinery</a>, All Rights Reserved</span><span class="sf-copy-divider">|</span><span class="sf-powered-text">Website Created by <a href="https://business.thomasnet.com/" target="_blank" rel="nofollow" title="Thomas Web Solutions">Thomas Marketing Services</a></span></span><span class="sfc-right"><span class="sf-copy-links"><a href="/privacy-policy/" rel="nofollow" title="Privacy Policy">Privacy Policy</a>|<a href="/terms-of-service/" rel="nofollow" title="Privacy Policy">Terms of Service</a>|<a href="/sitemap/" title="Sitemap">Sitemap</a></span></span>
      </div>
    </div>
  </div>
</footer>

<a href="#" id="back-to-top" title="Back to top" class="show"><span>^</span></a>



