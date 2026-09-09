
<!-- gdd-005-b --->
<!-- Site header wrap start-->
<div class="site-header-wrap gdd-005-b"> 
  <header class="site-header site-header-new" role="banner">
    <!-- Top Nav Starts -->
        <div class="sh-top-nav">
          <div class="inner-wrap-fullwidth">
            <div class="sh-logo-wrap">
            <a href="<?php bloginfo('url'); ?>" class="site-logo">
              <?php $logo = get_field('global_company_logo','option');
              if( !empty($logo) ): ?>  
                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['alt']; ?>" width="<?php echo $logo['width']; ?>" height="<?php echo $logo['height']; ?>">
              <?php endif;?>
            </a>
            <?php if( get_field('global_logo_tagline','option')): ?> 
            <span class="sh-logo_tagline"><?php echo get_field('global_logo_tagline','option'); ?></span> 
            <?php endif; ?>        
            </div>
            <div class="sh-utility-nav">
            <?php $string = get_field('global_toll_free','option');$string = preg_replace("/[^0-9]/", '', $string);?>  
            <p class="sh-ph">Call: <a href="tel:<?php echo $string;?>" aria-label="Toll Free Number"><?php echo get_field('global_toll_free','option');?></a></p>
            <?php if(get_field('global_email','option')):?>
            <p class="sh-email">Email: <a href="mailto:<?php echo get_field('global_email','option');?>" aria-label="Email Address"><?php echo get_field('global_email','option');?></a></p>
            <?php endif; ?>
            <?php
            if( have_rows('social_profiles', 'option') ): ?>
                <?php
                while ( have_rows('social_profiles', 'option') ) : the_row(); ?>          
        <?php
        $sp_social_icon = get_sub_field('sp_social_icon','option'); // image
        $sp_social_icon_hover = get_sub_field('sp_social_icon_hover','option'); // image
        $sp_social_profile = get_sub_field('sp_social_profile','option'); // text
        $sp_social_link = get_sub_field('sp_social_link','option'); // url
              if( $sp_social_link ):
                    $link_url = $sp_social_link['url'];
                    $link_title = $sp_social_link['title'];           
        ?>
 <span class="social-icon"> <a href="<?php echo esc_url($link_url); ?>" class="<?php echo $sp_social_profile; ?>" target="_blank"><img src="<?php echo $sp_social_icon['url']; ?>" class="sci-img" alt="<?php echo $sp_social_icon['alt']; ?>" width="22" height="22" title="<?php echo $sp_social_icon['alt']; ?>"><img src="<?php echo $sp_social_icon_hover['url']; ?>"  class="sci-img-hover" alt="<?php echo $sp_social_icon_hover['alt']; ?>" title="<?php echo $sp_social_icon_hover['alt']; ?>" width="22" height="22"></a></span>
                <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>




            
             <?php
            
                $rfq_button1 = get_field('global_catalog','option');
                if( $rfq_button1 ):
                    $link_url = $rfq_button1['url'];
                    $link_title = $rfq_button1['title'];
                ?>
               <span class="catalog-img"> <a href="<?php echo esc_url($link_url); ?>" class="catalog-btn"><img src="/wp-content/uploads/catalog.svg" alt="Browse the Energy Machinery product catalog. View industrial air compressors, reciprocating compressors, air dryers, and more." title="Catalog" width="19" height="14"><?php echo esc_html($link_title); ?></a></span>
                <?php endif; ?>

            <div class="sh-search">
              <!--Site Search Starts -->
              <div class="search-module">  
              <form action="https://catalog.energymachinery.com/keyword/?&key=all&keycateg=100" onsubmit="ctlSearch_OnClick1(); return false;" method="get" name="frmSearchBox1" class="search-form ng-pristine ng-valid" autocomplete="off">
                <div class="search-table">
                  <div class="search-row">
                    <div class="search-cell1">
                      <input value="2" name="ddlSearchType1" type="hidden">
                      <input type="text" id="keyword" value="" placeholder="Search" name="keyword" class="search-text" title="Search" aria-label="Search">
                    </div>
                    <div class="search-cell2">
                      <input class="search-submit" alt="Search" title="Search" value="" type="submit" aria-label="Search">
                    </div>
                  </div>
                </div>
              </form> 
              </div>
              <!--Site Search Starts -->
            </div>
              <!-- <a class="sh-ico-search search-link" target="_blank" href="#" aria-label="Search Icon"><span>Search</span></a>
              <a href="#menu" class="sh-ico-menu menu-link" aria-label="Menu Icon"><span>Menu</span></a> -->
          </div>
          </div>
        </div>
        <!-- Top Nav Ends -->

        
<!-- mobile design -->
    <div class="sh-mobile-design">
          
          <div class="contact-details">
          <?php $string = get_field('global_toll_free','option');$string = preg_replace("/[^0-9]/", '', $string);?>  
            <span class="sh-ph"> <a href="tel:<?php echo $string;?>" aria-label="Toll Free Number"><img src="/wp-content/uploads/ico-ph.svg" alt="Need air compressor help? Chat with an expert! Call Energy Machinery to discuss your system or ask any equipment questions." title="Toll Free Number" class="ico-ph"><?php echo get_field('global_toll_free','option');?></a></span>
            <?php if(get_field('global_email','option')):?>
            <span class="sh-email"><a href="mailto:<?php echo get_field('global_email','option');?>" aria-label="Email Address"><img src="/wp-content/uploads/ico-mail.svg" alt="Need air compressor help? Chat with an expert! Email Energy Machinery to discuss your system or ask any equipment questions." title="Email Us" class="ico-mail"><?php echo get_field('global_email','option');?></a></span>
            <?php endif; ?>
             <?php
            if( have_rows('social_profiles', 'option') ): ?>
                <?php
                while ( have_rows('social_profiles', 'option') ) : the_row(); ?>          
        <?php
        $sp_social_icon_mobile = get_sub_field('sp_social_icon_mobile','option'); // image
        $sp_social_profile = get_sub_field('sp_social_profile','option'); // text
        $sp_social_link = get_sub_field('sp_social_link','option'); // url
              if( $sp_social_link ):
                    $link_url = $sp_social_link['url'];
                    $link_title = $sp_social_link['title'];           
        ?>
 <span class="social-icon social-icon-mob"> <a href="<?php echo esc_url($link_url); ?>" class="<?php echo $sp_social_profile; ?>" target="_blank"><img src="<?php echo $sp_social_icon_mobile['url']; ?>" class="sci-img-mob" alt="<?php echo $sp_social_icon_mobile['alt']; ?>" title="<?php echo $sp_social_icon_mobile['alt']; ?>" width="20" height="20"></a></span>
                <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>
          </div>
            <div class="inner-wrap-fullwidth"> 
            <div class="sh-search">
              <!--Site Search Starts -->
              <div class="search-module">  
              <form action="https://catalog.energymachinery.com/keyword/?&key=all&keycateg=100" onsubmit="ctlSearch_OnClick1(); return false;" method="get" name="frmSearchBox1" class="search-form ng-pristine ng-valid" autocomplete="off">
                <div class="search-table">
                  <div class="search-row">
                    <div class="search-cell1">
                      <input value="2" name="ddlSearchType1" type="hidden">
                      <input type="text" id="keyword" value="" placeholder="Search" name="keyword" class="search-text" title="Search" aria-label="Search">
                    </div>
                    <div class="search-cell2">
                      <input class="search-submit" alt="Search" title="Search" value="" type="submit" aria-label="Search">
                    </div>
                  </div>
                </div>
              </form> 
              </div>
            </div>
          
                </div></div>
        <!-- mobile design end -->
        
        <!-- Sticky Nav Starts -->
        <div class="mob-sticky-wrap">
          <!-- Tab Menu Starts -->
          <div class="sh-mobile-icons">
            <div class="inner-wrap-fullwidth">  

              <a href="#menu" class="sh-ico-menu menu-link"  onclick="myFunction(this)">
                <span class="sh-menu-icon">  
                  <div class="bar1"></div>
                  <div class="bar2"></div>
                  <div class="bar3"></div>
                </span>
                Menu
              </a>
              
              <?php
                  $rfq_button1 = get_field('global_contact_link','option');
                  if( $rfq_button1 ):
                      $link_url = $rfq_button1['url'];
                      $link_title = $rfq_button1['title'];
                  ?>
                  <a href="<?php echo esc_url($link_url); ?>" class="btn gdd-btn ctc-btn mo-btn"><?php echo esc_html($link_title); ?></a>
                  <?php endif; ?>
                  <?php
                  $rfq_button2 = get_field('global_rfq_link','option');
                  if( $rfq_button2 ):
                      $link_url = $rfq_button2['url'];
                      $link_title = $rfq_button2['title'];
                  ?>
                  <a href="<?php echo esc_url($link_url); ?>" class="btn gdd-btn rfq-btn mo-btn"><?php echo esc_html($link_title); ?></a>
                  <?php endif; ?>

            </div>
          </div>
          <!-- Tab Menu Ends -->
          <!-- Mobile Utility -->
          <div class="sh-mobile-nav">
          <div class="sh-mb-nav">  
            <div class="mb-menu">
            <a href="#menu" class="sh-ico-menu menu-link"  onclick="myFunction(this)">
              <span class="sh-menu-icon">  
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
              </span>
              Menu
            </a>
              </div>
            <div class="sh-logo-wrap">
            <a href="<?php bloginfo('url'); ?>" class="site-logo">
              <?php $logo = get_field('global_company_logo','option');
              if( !empty($logo) ): ?>  
                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['alt']; ?>" width="<?php echo $logo['width']; ?>" height="<?php echo $logo['height']; ?>">
              <?php endif;?>
            </a>   
            </div>
            <div class="mb-ctc">
            <?php
           
                $rfq_button1 = get_field('global_contact','option');
                if( $rfq_button1 ):
                    $link_url = $rfq_button1['url'];
                    $link_title = $rfq_button1['title'];
                ?> 
               
                <a href="<?php echo esc_url($link_url); ?>" class="ctc-text"> <div class="ctc"></div><?php echo esc_html($link_title); ?></a>
                
                <?php endif; ?>
              
                </div>
          </div>
          </div>
          <!-- Mobile Utility -->
          <div class="sh-sticky-wrap">
            <div class="inner-wrap-fullwidth">
              <!--Site Nav Starts-->
              <div class="site-nav-container">
                <?php wp_nav_menu(array(
                  'menu'            => 'Gdd Primary Nav',
                  'container'       => 'nav',
                  'container_class' => 'site-nav',
                  'menu_class'      => 'sn-level-1',
                  'walker'        => new themeslug_walker_nav_menu
                )); ?>
              </div>
              <!--Site Nav Ends-->
              <!-- <a href="" class="site-nav-container-screen menu-link">&nbsp;</a> -->

            <div class="header-right-cta">
            <?php
                  $rfq_button1 = get_field('global_contact_link','option');
                  if( $rfq_button1 ):
                      $link_url = $rfq_button1['url'];
                      $link_title = $rfq_button1['title'];
                  ?>
                  <a href="<?php echo esc_url($link_url); ?>" class="btn gdd-btn ctc-btn desk-btn"><?php echo esc_html($link_title); ?></a>
                  <?php endif; ?>
                  <?php
                  $rfq_button2 = get_field('global_rfq_link','option');
                  if( $rfq_button2 ):
                      $link_url = $rfq_button2['url'];
                      $link_title = $rfq_button2['title'];
                  ?>
                  <a href="<?php echo esc_url($link_url); ?>" class="btn gdd-btn rfq-btn desk-btn"><?php echo esc_html($link_title); ?></a>
                  <?php endif; ?>

                   </div>
                  </div>
          </div>
          <!-- Sticky Nav Ends -->
        </div>
  </header>
  <?php if ( is_front_page() ) : ?>
  <!--Site intro container start-->
  <?php Starkers_Utilities::get_template_parts( array( 'parts/site-intro' ) ); ?>   
  <!--Site intro container end-->

<?php elseif ( is_page_template( 'landing-page.php' ) ) : ?>
  <!--page intro start-->    
  <?php Starkers_Utilities::get_template_parts( array( 'parts/lp-page-intro' ) ); ?>    
  <!--page intro end-->

  <?php elseif ( is_page_template( 'pillar-page-service.php' ) ) : ?>
  <!--page intro start-->    
  <?php Starkers_Utilities::get_template_parts( array( 'parts/pillar-page-intro-service' ) ); ?>    
  <!--page intro end-->

<?php else : ?>
  <!--page intro start-->    
  <?php Starkers_Utilities::get_template_parts( array( 'parts/page-intro' ) ); ?>    
  <!--page intro end-->
<?php endif; ?>

</div>
<!-- Site header wrap end-->