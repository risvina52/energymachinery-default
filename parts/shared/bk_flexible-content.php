
<?php if( have_rows('flexible_content') ): echo '<section class="additional-content">';
    while ( have_rows('flexible_content') ) : the_row(); ?>

	<?php if( get_row_layout() == 'tab_content' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
			<section class="accordian-tabs-module">
			 	<div class="inner-wrap-fullwidth">		 	
			 		<?php if( get_sub_field('section_header')): ?>
						<h2><?php echo get_sub_field('section_header'); ?></h2>
					<?php endif; ?>
					<?php if( get_sub_field('section_subtext')): ?>
						<p class="column-subtext"><?php echo get_sub_field('section_subtext'); ?></p>
					<?php endif; ?>

					<ul class="accordion-tabs">
						<?php if( have_rows('tab_content_row') ): while ( have_rows('tab_content_row') ) : the_row(); ?>
							<li class="tab-header-and-content">
								<a href="javascript:void(0)" class="tab-link"><?php echo get_sub_field('tab_header'); ?></a>
								<div class="tab-content"><?php echo get_sub_field('tab_body'); ?></div>							
							</li>
						<?php endwhile; ?>
						<?php endif; ?>
					</ul>
					<?php if( get_sub_field('divider')): ?>
						<hr>
					<?php endif; ?>			
				</div>
			</section>
		<?php endif; ?>

	<?php elseif( get_row_layout() == 'full_width_cta' ): ?>

		<section class="full-width-cta-test <?php echo get_sub_field('fwc-class'); ?>">
<?php if( get_sub_field('section_header')): ?>
			<div class="inner-wrap-fullwidth"><h2 class="cta-banner-header"><?php echo get_sub_field('section_header'); ?></h2></div>
<?php endif; ?>		
			<section class="fwc-module">
				<div class="inner-wrap-fullwidth">		
					<div class="row cta-banner bottom-baseline">
			            <p class="cta-banner-body"><?php echo get_sub_field('section_body'); ?></p>	
						<?php if( get_sub_field('url')): ?>
			       		 <a href="<?php echo get_sub_field('url'); ?>" class="btn fw-cta" target="_blank"><?php echo get_sub_field('cta_button'); ?></a>
						 <?php endif; ?>		
						 <?php 
						$link = get_sub_field('fwc_btn');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="btn fw-cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
			        </div>
				</div>
			</section>			
			<?php if( get_sub_field('divider')): ?>
				<div class="inner-wrap-fullwidth"><hr></div>
			<?php endif; ?>
		</section>		
        

 	<?php elseif( get_row_layout() == 'multiple_columns' ): ?>
 		<section class="multiple-cols-module <?php echo get_sub_field('content_column_class'); ?>">
		 	<div class="inner-wrap-fullwidth">	
		 		<?php if( get_sub_field('section_header')): ?>
					<h2><?php echo get_sub_field('section_header'); ?></h2>
				<?php endif; ?>
				<?php if( get_sub_field('section_subtext')): ?>
					<p class="column-subtext"><?php echo get_sub_field('section_subtext'); ?></p>
				<?php endif; ?>
				<section class="<?php if (get_sub_field('number_columns') == '2') {
						echo 'rows-of-2';
					} else if (get_sub_field('number_columns') == '3') {
					        echo 'rows-of-3';
					} else if (get_sub_field('number_columns') == '4') {
					        echo 'rows-of-4';
					}
					?>">

		         	<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
						<div><?php echo get_sub_field('content_column'); ?></div>
					<?php endwhile; ?>
					<?php endif; ?>				
				</section>
				<?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>
			</div>
 		</section>	

 		<?php elseif( get_row_layout() == 'multiple_columns_gdd_002' ): ?>
 		<section class="multiple-cols-module gdd_002">
		 	<div class="inner-wrap-fullwidth">	
		 		<?php if( get_sub_field('section_header_gdd_002')): ?>
					<h2><?php echo get_sub_field('section_header_gdd_002'); ?></h2>
				<?php endif; ?>
				<?php if( get_sub_field('section_subtext_gdd_002')): ?>
					<p class="column-subtext"><?php echo get_sub_field('section_subtext_gdd_002'); ?></p>
				<?php endif; ?>
				<section class="<?php if (get_sub_field('number_columns_gdd_002') == '2') {
						echo 'rows-of-2';
					} else if (get_sub_field('number_columns_gdd_002') == '3') {
					        echo 'rows-of-3';
					} else if (get_sub_field('number_columns_gdd_002') == '4') {
					        echo 'rows-of-4';
					}
					?>">

		         	<?php if( have_rows('content_gdd_002') ): while ( have_rows('content_gdd_002') ) : the_row(); ?>
						<div><?php echo get_sub_field('content_column_gdd_002'); ?></div>
					<?php endwhile; ?>
					<?php endif; ?>				
				</section>
				<?php if( get_sub_field('divider_gdd_002')): ?>
					<hr>
				<?php endif; ?>
			</div>
 		</section>

 		

 		<!-- Our Partners Module Starts -->
<?php elseif( get_row_layout() == 'our_partners_module' ): ?>
  <section class="our-partners-module_gdd_002 cpm_module" style="display: none">
      <div class="inner-wrap-fullwidth">
        <?php if( get_sub_field('opm_heading')): ?> 
        <h2 class="opm-heading"><?php echo get_sub_field('opm_heading'); ?></h2>
        <?php endif; ?> 

        <div class="opm-wrap">
          <?php if( have_rows('opm_partners_buckets') ): while ( have_rows('opm_partners_buckets') ) : the_row(); ?>
          <?php
          $opm_link = get_sub_field('opm_link');
          if($opm_link):
          $link_url = $opm_link['url'];
          $link_title = $opm_link['title'];
          $link_target = $opm_link['target'] ? $opm_link['target'] : '_self';
           ?> 
          <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr( $link_target ); ?>" rel="noopener noreferrer">

            <?php if(get_sub_field('opm_image')) : ?><?php $opm_image = get_sub_field('opm_image'); ?>
            <img src="<?php echo $opm_image['url']; ?>" class="off" alt="<?php echo $opm_image['title']; ?>" title="<?php echo $opm_image['title']; ?>" width="<?php echo $opm_image['width']; ?>" height="<?php echo $opm_image['height']; ?>">
            <?php endif; ?>

            <?php if(get_sub_field('opm_hover_image')) : ?><?php $opm_hover_image = get_sub_field('opm_hover_image'); ?>
            <img src="<?php echo $opm_hover_image['url']; ?>" class="on" alt="<?php echo $opm_hover_image['title']; ?>" title="<?php echo $opm_hover_image['title']; ?>" width="<?php echo $opm_hover_image['width']; ?>" height="<?php echo $opm_hover_image['height']; ?>">
            <?php endif; ?>

          </a>
        <?php endif; ?>   
          <?php endwhile; ?><?php endif; ?>
        </div>
      </div>  
  </section>
<!-- Our Partners Module Ends -->


	<?php elseif( get_row_layout() == 'img_gallery_section' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
			<section class="image-gallery-module">
				<div class="inner-wrap-fullwidth">	
					<?php if( get_sub_field('section_header')): ?>
						<h2><?php echo get_sub_field('section_header'); ?></h2>
					<?php endif; ?>
					<section class="<?php if (get_sub_field('number_columns') == '2') {
								echo 'rows-of-2';
							} else if (get_sub_field('number_columns') == '3') {
							        echo 'rows-of-3';
							} else if (get_sub_field('number_columns') == '4') {
							        echo 'rows-of-4';
							}
							?>">
						<?php $images = get_sub_field('img_gallery');
							if( $images ): ?>
								<?php foreach( $images as $image ): ?>
			                    	<a href="<?php echo $image['sizes']['large']; ?>" class="lightbox loop-item">
				                    	<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>"/>
			                    		<h4 class="li-title"><?php echo $image['caption']; ?></h4>
			                    	</a>
								<?php endforeach; ?>
							<?php endif; ?>
					</section>
					<?php if( get_sub_field('divider')): ?>
							<hr>
					<?php endif; ?>
				</div>
			</section>
		<?php endif; ?>
		
		
	<?php elseif( get_row_layout() == 'img_gallery_with_thumbnails' ): ?>
		<section class="image-gallery-with-thumbs">
			<div class="inner-wrap-fullwidth">
				<?php if( get_sub_field('imt_section_header')): ?>
					<h3><?php echo get_sub_field('imt_section_header'); ?></h3>
				<?php endif; ?>
				<div class="dest-slider flexslider">
				    <ul class="slides">
				    	<?php $images = get_sub_field('imgwt_gallery');
				    	if( $images ): ?>
					        <?php foreach( $images as $image ): ?>
					        	<li data-thumb="<?php echo $image['sizes']['thumbnail']; ?>">
					            	<span class="dest-slider-img"><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>"></span>
					        	</li>
					        <?php endforeach; ?>
					    <?php endif; ?>
				    </ul>
				</div>
			<?php if( get_sub_field('divider')): ?>
				<hr>
			<?php endif; ?>
			</div>			
		</section>




	<?php elseif( get_row_layout() == 'click_expand' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
			<section class="click-expand-module">
				<div class="inner-wrap-fullwidth">
					<div class="click-expand <?php if( get_sub_field('spacing')): ?>spacing-bottom<?php endif; ?>">
			          <h3 class="ce-header" tabindex="0"><?php echo get_sub_field('section_header'); ?></h3>
			          <div class="ce-body"><?php echo get_sub_field('section_body'); ?></div>
			      	</div>
			    </div>
			</section>	        
		<?php endif; ?>

 			
	<?php elseif( get_row_layout() == 'table' ): ?>
		<section class="tabular-data">
		   <div class="inner-wrap-fullwidth">
		       
		            <div class="headexpand-wrap">  
		             <?php if( get_sub_field('section_header')): ?>	
		            	<h2 class="headexpand"><?php echo get_sub_field('section_header'); ?></h2>
					<?php endif; ?>
					<?php if( get_sub_field('section_subtext')): ?>
						<?php echo get_sub_field('section_subtext'); ?>
					<?php endif; ?>
			        <?php if( get_sub_field('table_content')): ?>
			            <div class="table-wrap">
			                <table class="tablesaw tablesaw-stack" data-tablesaw-mode="stack">
			                	<?php echo get_sub_field('table_content'); ?>
			                </table>
			            </div>
			        <?php endif; ?>
		
		           </div> 
		           <!--headexpand-wrap END -->


		        <?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>
			</div>
		</section>	


	<?php elseif( get_row_layout() == 'product_grid' ): ?>
		<section class="product-grid-module">
			<div class="inner-wrap-fullwidth">
				<?php if( get_sub_field('section_header')): ?>
					<h2 class="carousel-header"><?php echo get_sub_field('section_header'); ?></h2>
				<?php endif; ?>
				<?php if( get_sub_field('section_subtext')): ?>
					<p><?php echo get_sub_field('section_subtext'); ?></p>
				<?php endif; ?>

				<div class="<?php if( get_sub_field('carousel')): ?>flexslider<?php endif; ?> product-carousel">
					<ul class="slides">
						<?php if( have_rows('product_row') ): while ( have_rows('product_row') ) : the_row(); ?>
							<li>
								<?php if( have_rows('product_item') ): while ( have_rows('product_item') ) : the_row(); ?>
									<?php 	
																		
										$link = get_sub_field('product_url');
											if( $link ): 
												$link_url = $link['url'];
												$link_title = $link['title'];
												?>
												<a class="product-item" href="<?php echo esc_url($link_url); ?>"> 
													<h2 class="product-header"><?php echo get_sub_field('product_header'); ?></h2> 
													<span class="product-img">
														<?php if(get_sub_field('product_picture')) : ?>
															<?php $product_picture = get_sub_field('product_picture'); ?>
															   <img class="pmi-img" src="<?php echo $product_picture['url']; ?>" alt="<?php echo $product_picture['title']; ?>" title="<?php echo $product_picture['title']; ?>">
														<?php endif; ?>
													</span>									
													<span class="product-cta"><?php echo esc_html($link_title); ?></span>
												</a>
											<?php endif; ?>
								<?php endwhile; ?>
								<?php endif; ?>
							</li>
						<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
				<?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'text_media' ): ?>
		<section class="text-media-module">
			<div class="inner-wrap-fullwidth">
				<?php if( get_sub_field('section_subtext')): ?>
					<p class="column-subtext"><?php echo get_sub_field('section_subtext'); ?></p>
				<?php endif; ?>			
		     	<article class="clearfix">	    		
		    		<div class="col-3of9">
		    			<?php echo get_sub_field('media'); ?>
		    		</div>
		    		<div class="col-6of9 col-last">
			    		<?php if( get_sub_field('section_header')): ?>
						<h2><?php echo get_sub_field('section_header'); ?></h2>
						<?php endif; ?>
		    			<?php echo get_sub_field('text'); ?>
		    		</div>	    		
				</article>
				<?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'product_module' ): ?>
	<!-- Product Module Starts -->
    <section class="product-module gdd-006-a">
        <div class="inner-wrap-fullwidth">

          <?php if( get_sub_field('pm_heading')): ?>			
          <h2 class="pm-heading">
          	<?php
		    $pm_heading_link = get_sub_field('pm_heading_link');
		    if($pm_heading_link):
		    $link_url = $pm_heading_link['url'];
		    $link_title = $pm_heading_link['title'];
		    $link_target = $pm_heading_link['target'] ? $pm_heading_link['target'] : '_self';
		    ?>
          	<a href="<?php echo esc_url($link_url); ?>">
          	<?php endif; ?>	
          		<span><?php echo get_sub_field('pm_heading'); ?></span>
          	<?php if( get_sub_field('pm_heading_link')): ?>
          	</a>
          	<?php endif; ?>
          </h2>
          <?php endif; ?>

          <div class="pm-item-wrap">
          	<?php if( have_rows('pm_products_buckets') ): while ( have_rows('pm_products_buckets') ) : the_row(); ?>
            <div class="pm-item">
              <?php
		      $pm_link = get_sub_field('pm_link');
		      if($pm_link):
		      $link_url = $pm_link['url'];
		      $link_title = $pm_link['title'];
		      $link_target = $pm_link['target'] ? $pm_link['target'] : '_self';
		      ?>		
              <a href="<?php echo esc_url($link_url); ?>">
              	<?php if(get_sub_field('pm_image')) : ?><?php $pm_image = get_sub_field('pm_image'); ?>
                <span class="pm-img-wrap">
                	<img src="<?php echo $pm_image['url']; ?>" alt="<?php echo $pm_image['title']; ?>" title="<?php echo $pm_image['title']; ?>"  width="<?php echo $pm_image['width']; ?>" height="<?php echo $pm_image['height']; ?>">
                </span>
                <?php endif; ?>
                <?php if( get_sub_field('pm_title')): ?>
                <span class="pm-title"><?php echo get_sub_field('pm_title'); ?></span>
                <?php endif; ?>
              </a>
              <?php endif; ?>
            </div>
            <?php endwhile; ?><?php endif; ?>
          </div>
        </div>
    </section>
    <!-- Product Module Ends -->


    <?php elseif( get_row_layout() == 'product_module_gdd_006' ): ?>
	<!-- Product Module Starts -->
    <section class="product-module-new gdd-006-b" style="display: none;">
        <div class="inner-wrap-fullwidth">

          <?php if( get_sub_field('pm_heading')): ?>			
          <h2 class="pm-heading">
          	<?php
		    $pm_heading_link = get_sub_field('pm_heading_link');
		    if($pm_heading_link):
		    $link_url = $pm_heading_link['url'];
		    $link_title = $pm_heading_link['title'];
		    $link_target = $pm_heading_link['target'] ? $pm_heading_link['target'] : '_self';
		    ?>
          	<a href="<?php echo esc_url($link_url); ?>">
          	<?php endif; ?>	
          		<span><?php echo get_sub_field('pm_heading'); ?></span>
          	<?php if( get_sub_field('pm_heading_link')): ?>
          	</a>
          	<?php endif; ?>
          </h2>
          <?php endif; ?>

          <div class="pmn-item-wrapper">
          	<?php if( have_rows('pm_products_buckets') ): while ( have_rows('pm_products_buckets') ) : the_row(); ?>
            <div class="pmn-item">

            	 <?php
		      $pm_link = get_sub_field('pm_link');
		      
		      $link_url = $pm_link['url'];
		      $link_title = $pm_link['title'];
		      $link_target = $pm_link['target'] ? $pm_link['target'] : '_self';
		      ?>

            	<?php if(get_sub_field('pm_image')) : ?><?php $pm_image = get_sub_field('pm_image'); ?>
                <figure class="pmn-img-wrap">
                	<a href="<?php echo esc_url($link_url); ?>" target="<?php echo $link_target;?>"><img src="<?php echo $pm_image['url']; ?>" alt="<?php echo $pm_image['title']; ?>" title="<?php echo $pm_image['title']; ?>"></a>
                </figure>
                <?php endif; ?>
                <div class="pmn-content">
                <?php if( get_sub_field('pm_title')): ?>
                <h3 class="pmn-title"><a href="<?php echo esc_url($link_url); ?>"  target="<?php echo $link_target;?>"><?php echo get_sub_field('pm_title'); ?></a></h3>
                <?php endif; ?>
                 <?php if( get_sub_field('pm_title_text')): ?>
                <p class="pmn-text"><?php echo get_sub_field('pm_title_text'); ?></p>
                <?php endif; ?>


              <?php
		      
		      if($pm_link):
		      
		      ?>		
              <a href="<?php echo esc_url($link_url); ?>" class="pmn-link" target="<?php echo $link_target;?>"><?php echo esc_html($link_title); ?></a>
              <?php endif; ?>
              </div>
            </div>
            <?php endwhile; ?><?php endif; ?>
          </div>
        </div>
    </section>
    <!-- Product Module Ends -->	

    <?php elseif( get_row_layout() == 'service_parts_rentals_module' ): ?>
    <!-- Servive Parts Rental Module Starts  -->
    <section class="service-part-rental-module">
        <div class="inner-wrap-fullwidth">
          <?php if( get_sub_field('sprm_heading')): ?>	
          <h2 class="sprm-heading"><?php echo get_sub_field('sprm_heading'); ?></h2>
          <?php endif; ?>
          <div class="sprm-item-wrap">

          	<?php if( have_rows('sprm_buckets') ): while ( have_rows('sprm_buckets') ) : the_row(); ?>
            <div class="sprm-item">
              <?php
		      $sprm_link = get_sub_field('sprm_link');
		      if($sprm_link):
		      $link_url = $sprm_link['url'];
		      $link_title = $sprm_link['title'];
		      $link_target = $sprm_link['target'] ? $sprm_link['target'] : '_self';
		      ?>	
              <a href="<?php echo esc_url($link_url); ?>">
                <?php if(get_sub_field('sprm_images')) : ?><?php $sprm_images = get_sub_field('sprm_images'); ?>
                <span class="sprm-img-wrap">
                	<img src="<?php echo $sprm_images['url']; ?>" alt="<?php echo $sprm_images['title']; ?> Image" title="<?php echo $sprm_images['title']; ?>" width="<?php echo $sprm_images['width']; ?>" height="<?php echo $sprm_images['height']; ?>">
                </span>
                <?php endif; ?>
                <?php if( get_sub_field('sprm_title')): ?>
                <span class="sprm-title"><?php echo get_sub_field('sprm_title'); ?></span>
                <?php endif; ?>
              </a>
              <?php endif; ?>
            </div>
            <?php endwhile; ?><?php endif; ?>

          </div>
        </div>
    </section>
    <!-- Servive Parts Rental Module Ends  -->	

    <?php elseif( get_row_layout() == 'feature_image_content_module' ): ?>
    <!-- Feature Image & Content Module Starts -->	
    <section class="feature-img-content-module">
    	<div class="inner-wrap-fullwidth">
    		<div class="ficm-wrap">
    			<?php if(get_sub_field('ficm_image')) : ?><?php $ficm_image = get_sub_field('ficm_image'); ?>
    			<div class="ficm-img-wrap">
    				<img src="<?php echo $ficm_image['url']; ?>" alt="<?php echo $ficm_image['title']; ?>" title="<?php echo $ficm_image['title']; ?>">
    			</div>
    			<?php endif; ?>
    			<?php if( get_sub_field('ficm_content')): ?>
                <div class="ficm-right-content"><?php echo get_sub_field('ficm_content'); ?></div>
                <?php endif; ?>
    		</div>

    		<?php if( get_sub_field('ficm_bottom_content')): ?>
                <div class="ficm-bottom-content"><?php echo get_sub_field('ficm_bottom_content'); ?></div>
            <?php endif; ?>
    	</div>
    </section>
    <!-- Feature Image & Content Module Ends -->	
    
    <?php elseif( get_row_layout() == 'contact_page_module' ): ?>
    <!-- Contact Page Module Starts -->
    <section class="contact-page-module">
    	<div class="inner-wrap-fullwidth">
    		<div class="cpm-wrap">
    			<div class="cpm-left">
    				<p>
    				<?php if( get_field('global_company_name','option')): ?>	
				    <strong><?php echo get_field('global_company_name','option'); ?></strong>
				    <?php endif; ?>
				    <br>
				    <?php if( get_field('global_address_one','option')): ?>
			        <?php echo get_field('global_address_one','option'); ?>
			        <?php endif; ?>
			        <br>
			        <?php if( get_field('global_address_two','option')): ?>
			        <?php echo get_field('global_address_two','option'); ?>
			        <?php endif; ?>
			        </p>
    			</div>
    			<div class="cpm-right">
    				<p>
    				<?php $string = get_field('global_toll_free','option');$string = preg_replace("/[^0-9]/", '', $string);?>	
                    Toll Free: <a href="tel:<?php echo $string;?>" aria-label="Toll Free Number"><?php echo get_field('global_toll_free','option');?></a>
                    <br>
                    <?php $string = get_field('global_phone_number','option');$string = preg_replace("/[^0-9]/", '', $string);?>
                    Phone: <a href="tel:<?php echo $string;?>" aria-label="Phone Number"><?php echo get_field('global_phone_number','option');?></a>
                    <br>
                    <?php if( get_field('global_fax','option')): ?>
                    <span class="fax">Fax: <a href="javascript:void(0);" tabindex="-1"><?php echo get_field('global_fax','option'); ?></a></span>
                    <?php endif; ?>
                    <br>
                    <?php if(get_field('global_email','option')):?>
                    Email: <a href="mailto:<?php echo get_field('global_email','option');?>" aria-label="Email Address"><?php echo get_field('global_email','option');?></a>
                    <?php endif; ?>
                    <br>
                    Website: 
			        <?php
				    $global_website = get_field('global_website','option');
				    if($global_website):
				    $link_url = $global_website['url'];
				    $link_title = $global_website['title'];
				    $link_target = $global_website['target'] ? $global_website['target'] : '_self';
				    ?>
			        <a href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
			        <?php endif; ?>
    				</p>
    			</div>
    		</div>
    		<div class="cpm-btn-wrap">
    			<?php
			    $cpm_cta = get_sub_field('cpm_cta');
			    if($cpm_cta):
			    $link_url = $cpm_cta['url'];
			    $link_title = $cpm_cta['title'];
			    $link_target = $cpm_cta['target'] ? $cpm_cta['target'] : '_self';
			    ?>
		        <a href="<?php echo esc_url($link_url); ?>" class="btn cpm-btn"><?php echo esc_html($link_title); ?></a>
		        <?php endif; ?>
    		</div>

    		<?php if( get_sub_field('cpm_map')): ?>
                <div class="cpm-map"><?php echo get_sub_field('cpm_map'); ?></div>
            <?php endif; ?>
    	</div>
    </section>	
    <!-- Contact Page Module Ends -->		

    <?php elseif( get_row_layout() == 'tables_in_row_module' ): ?>
    <!-- Tables in Row Module Starts -->	
    <section class="tables-in-row-module">
    	<div class="inner-wrap-fullwidth">
    		<div class="tirm-wrap <?php if (get_sub_field('tirm_no_of_columns') == '2') {
						echo 'tirm-wrap-2';
					} else if (get_sub_field('tirm_no_of_columns') == '3') {
					        echo 'tirm-wrap-3';
					} else if (get_sub_field('tirm_no_of_columns') == '4') {
					        echo 'tirm-wrap-4';
					}
					?>">
				<?php if( have_rows('tirm_content') ): while ( have_rows('tirm_content') ) : the_row(); ?><div class="tirm-item">
    				<?php if( get_sub_field('tirm_heading')): ?>
                		<p class="tirm-heading"><?php echo get_sub_field('tirm_heading'); ?></p>
            		<?php endif; ?>
            		<?php if( get_sub_field('tirm_sub_heading')): ?>
                		<p class="tirm-sub-heading"><?php echo get_sub_field('tirm_sub_heading'); ?></p>
            		<?php endif; ?>
            		<?php if( get_sub_field('tirm_table_content')): ?>
			            <div class="table-wrap">
			                <table class="tablesaw tablesaw-stack" data-tablesaw-mode="stack">
			                	<?php echo get_sub_field('tirm_table_content'); ?>
			                </table>
			            </div>
					<?php endif; ?>
					<?php if( get_sub_field('tirm_description')): ?>
                		<div><?php echo get_sub_field('tirm_description'); ?></div>
            		<?php endif; ?></div><?php endwhile; ?><?php endif; ?>
            </div>
    		<?php if( get_sub_field('tirm_bottom_content')): ?>
            	<div><?php echo get_sub_field('tirm_bottom_content'); ?></div>
            <?php endif; ?>
    	</div>
    </section>
    <!-- Tables in Row Module Ends -->

    <?php elseif( get_row_layout() == 'industries_module' ): ?>
    <!-- Servive Parts Rental Module Starts  -->
    <section class="gdd-004-b industries-module" style="display: none;">
        <div class="inner-wrap-fullwidth">
          <?php if( get_sub_field('im_heading')): ?>	
          <h2 class="im-heading"><?php echo get_sub_field('im_heading'); ?></h2>
          <?php endif; ?>
          <div class="im-item-wrap">

          	<?php if( have_rows('im_buckets') ): while ( have_rows('im_buckets') ) : the_row(); ?>
            <div class="im-item">
              <?php
		      $im_link = get_sub_field('im_link');
		      if($im_link):
		      $link_url = $im_link['url'];
		      $link_title = $im_link['title'];
		      $link_target = $im_link['target'] ? $im_link['target'] : '_self';
		      ?>	
              <a class="im-link" href="<?php echo esc_url($link_url); ?>">
              	<?php else: ?>
              		<span class="im-link">
              		<?php endif; ?>
              		<span class="im-link-inner">
                <?php if(get_sub_field('im_images')) : ?><?php $im_images = get_sub_field('im_images'); ?>
                <span class="im-img-wrap">
                	<img src="<?php echo $im_images['url']; ?>" alt="<?php echo $im_images['title']; ?>" title="<?php echo $im_images['title']; ?>">
                </span>
                <?php endif; ?>
                <?php if( get_sub_field('im_title')): ?>
                <span class="im-title"><?php echo get_sub_field('im_title'); ?></span>
                <?php endif; ?>
            	</span>
            	<span class="im-overlay">
				<?php if( get_sub_field('im_content')): ?>
                <span class="im-content"><?php echo get_sub_field('im_content'); ?></span>
                <?php endif; ?>
                <span class="im-learn-more">Learn More</span>
            	</span>
                <?php if($im_link): ?>
              </a>
              <?php else: ?>
              </span>
              <?php endif; ?>
            </div>
            <?php endwhile; ?><?php endif; ?>

          </div>
        </div>
    </section>
    <!-- Servive Parts Rental Module Ends  -->	

    <?php elseif( get_row_layout() == 'pillar_page_contact_module' ): ?>
    <section class="pillar-page-contact-module" style="background-image: url(<?php echo get_sub_field('ppcm_background_image'); ?>);" id="<?php echo get_sub_field('ppcm_section_id');?>">
    	<?php
            // Check the fullwidth toggle
            $is_fullwidth = get_sub_field('cwrim_fullwidth');
            $wrap_class = $is_fullwidth ? 'inner-wrap-fullwidth' : 'inner-wrap';
        ?>
        <div class="<?php echo esc_attr($wrap_class); ?>">
    			<?php if(get_sub_field('ppcm_heading')):?> 
			    	<h2 class="ppcm-heading"><?php echo get_sub_field('ppcm_heading');?></h2>
				<?php endif;?> 
    			<?php if( get_sub_field('ppcm_content')): ?>
                <div class="ppcm-content"><?php echo get_sub_field('ppcm_content'); ?></div>
                <?php endif; ?>
                <?php $link = get_sub_field('ppcm_cta');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
                <div class="ppcm-cta-wrap">                
				    <a class="btn ppcm-cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
				<?php $link2 = get_sub_field('ppcm_cta2');
				if( $link2 ): 
				    $link_url = $link2['url'];
				    $link_title = $link2['title'];
				    $link_target = $link2['target'] ? $link2['target'] : '_self';
				    ?>
				    <a class="btn ppcm-cta ppcm-cta2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				
			</div>
			<?php endif; ?>
    	</div>
    </section>

<?php elseif( get_row_layout() == 'pillar_page_types_module' ): ?>
    <section class="pillar-page-types-module" id="<?php echo get_sub_field('pptm_section_id');?>">
    	<div class="inner-wrap-fullwidth">
    			<?php if(get_sub_field('pptm_heading')):?> 
			    	<h2 class="pptm-heading"><?php echo get_sub_field('pptm_heading');?></h2>
				<?php endif;?> 
    			<?php if( get_sub_field('pptm_content')): ?>
                <div class="pptm-content"><?php echo get_sub_field('pptm_content'); ?></div>
                <?php endif; ?>
                <?php if(get_sub_field('pptm_subhead')):?> 
			    	<h3 class="pptm-subhead"><?php echo get_sub_field('pptm_subhead');?></h3>
				<?php endif;?> 
    			<?php if( get_sub_field('pptm_subtext')): ?>
                <p class="pptm-subtext"><?php echo get_sub_field('pptm_subtext'); ?></p>
                <?php endif; ?>
                <div class="pptm-items-wrap">
                	<?php if( have_rows('pptm_items') ): while ( have_rows('pptm_items') ) : the_row(); ?>
                		<div class="pptm-item">
                			<div class="pptmi-inner">
	                			<?php $image = get_sub_field('pptm_icon');
								if( !empty( $image ) ): ?>
									<figure class="pptm-icon"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" /></figure>
								<?php endif; ?>
								<?php if(get_sub_field('pptm_title')):?> 
							    	<span class="pptm-title"><?php echo get_sub_field('pptm_title');?></span>
								<?php endif;?> 
							</div>
                		</div>
                	<?php endwhile; endif; ?>	
				</div>

    	</div>
    </section>

    <?php elseif( get_row_layout() == 'content_with_right_image_module' ): ?>
    <section class="content-with-right-image-module" id="<?php echo get_sub_field('cwrim_section_id');?>">
    	<div class="inner-wrap-fullwidth">
    			<?php if(get_sub_field('cwrim_heading')):?> 
			    	<h2 class="cwrim-heading"><?php echo get_sub_field('cwrim_heading');?></h2>
				<?php endif;?> 
				<div class="cwrim-wrap">
					<div class="cwrim-content-wrap">
		    			<?php if( get_sub_field('cwrim_content')): ?>
		                <div class="cwrim-content"><?php echo get_sub_field('cwrim_content'); ?></div>
		                <?php endif; ?>
		            </div>
		            <div class="cwrim-img-wrap">
						<?php $image = get_sub_field('cwrim_image');
							if( !empty( $image ) ): ?>
								<figure class="cwrim_image"><a class="lightbox" href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" /></a></figure>
							<?php endif; ?>
		            </div>
		        </div>
    	</div>
    </section>

    <?php elseif( get_row_layout() == 'pillar_page_basics_module' ): ?>
    <section class="pillar-page-basics-module">
    	<div class="inner-wrap-fullwidth">
    		<?php if( get_sub_field('ppbm_top_content')): ?>
		            <div class="ppbm-top-content"><?php echo get_sub_field('ppbm_top_content'); ?></div>
		    <?php endif; ?> 
		    <div class="ppbm-middle-content-wrap" id="<?php echo get_sub_field('ppbm_section_id');?>">   			
				<div class="ppbm-wrap">
					<div class="ppbm-content-wrap">
						<?php if(get_sub_field('ppbm_heading')):?> 
				    	<h2 class="ppbm-heading"><?php echo get_sub_field('ppbm_heading');?></h2>
						<?php endif;?> 
			    		<?php if( get_sub_field('ppbm_content')): ?>
			            <div class="ppbm-content"><?php echo get_sub_field('ppbm_content'); ?></div>
			            <?php endif; ?>
			        </div>
			        <div class="ppbm-img-wrap">
						<?php $image = get_sub_field('ppbm_image');
							if( !empty( $image ) ): ?>
								<figure class="ppbm-image"><a class="lightbox" href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" /></a></figure>
							<?php endif; ?>
			        </div>
			    </div>
			</div>
		    <div class="ppbm-bottom-content-wrap">
				<div class="ppbmbc-wrap">
		    		<?php if( get_sub_field('ppbm_left_content')): ?>
		            <div class="ppbmbc-content ppbm-left-content"><?php echo get_sub_field('ppbm_left_content'); ?></div>
		            <?php endif; ?>
		            <?php if( get_sub_field('ppbm_right_content')): ?>
		            <div class="ppbmbc-content ppbm-right-content"><?php echo get_sub_field('ppbm_right_content'); ?></div>
		            <?php endif; ?>
		        </div>
		    </div>
    	</div>
    </section>

    <?php elseif( get_row_layout() == 'pillar_page_tab_content' ): ?>
			<section class="pillar-page-tab-content-module" id="<?php echo get_sub_field('pptc_section_id');?>">
			 	<div class="inner-wrap-fullwidth">		 	
			 		<?php if( get_sub_field('pptc_heading')): ?>
						<h2 class="pptc-heading"><?php echo get_sub_field('pptc_heading'); ?></h2>
					<?php endif; ?>
					<?php if( get_sub_field('pptc_content')): ?>
						<div class="pptc-content"><?php echo get_sub_field('pptc_content'); ?></div>
					<?php endif; ?>
					<ul class="accordion-tabs"><?php if( have_rows('tab_content_row') ): while ( have_rows('tab_content_row') ) : the_row(); ?><li class="tab-header-and-content"><a href="javascript:void(0)" class="tab-link"><?php echo get_sub_field('tab_header'); ?></a><div class="tab-content"><?php $image = get_sub_field('tab_image'); ?><div class="pptc-tab-wrap"><div class="pptct-left <?php if( empty( $image ) ): ?>pptct-left-fullwidth <?php endif; ?>"><h3 class="pptc-tab-title"><?php echo get_sub_field('tab_header'); ?></h3><?php echo get_sub_field('tab_body'); ?><?php $link2 = get_sub_field('tab_cta'); if( $link2 ): 
				    $link_url = $link2['url'];
				    $link_title = $link2['title'];
				    $link_target = $link2['target'] ? $link2['target'] : '_self';
				    ?><a class="btn pptc-tab-cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a><?php endif; ?></div><?php if( !empty( $image ) ): ?><div class="pptct-right"><figure class="pptc-tab-image"><a class="lightbox" href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" /></a></figure></div><?php endif; ?></div></div></li><?php endwhile; endif; ?></ul>
					<?php if( get_sub_field('divider')): ?>
						<hr>
					<?php endif; ?>			
				</div>
			</section>

	<?php elseif( get_row_layout() == 'homepage_industries_module' ): ?>
			<section class="homepage-industries-module gdd-008-a" style="display:none;">
			 	<div class="inner-wrap-fullwidth">	
					<ul class="accordion-tabs"><?php if( have_rows('tab_content_row') ): $i=1; while ( have_rows('tab_content_row') ) : the_row(); ?><li class="tab-header-and-content"><a href="javascript:void(0)" class="tab-link" data-target="him-tab-<?php echo $i;?>"><?php echo get_sub_field('tab_header'); ?></a><div class="tab-content" id="him-tab-<?php echo $i;?>"><div class="him-tab-wrap"><?php $image = get_sub_field('tab_image'); ?><?php if( !empty( $image ) ): ?><figure class="him-tab-image"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo get_sub_field('tab_header'); ?>" title="<?php echo get_sub_field('tab_header'); ?>" /></figure><?php endif; ?><h2 class="him-tab-title"><?php echo get_sub_field('tab_header'); ?></h2><?php echo get_sub_field('tab_body'); ?><?php $link2 = get_sub_field('tab_cta'); if( $link2 ): 
				    $link_url = $link2['url'];
				    $link_title = $link2['title'];
				    $link_target = $link2['target'] ? $link2['target'] : '_self';
				    ?><a class="btn him-tab-cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a><?php endif; ?></div></div></li><?php $i++; endwhile; endif; ?></ul>					
				</div>
			</section>

	<?php elseif( get_row_layout() == 'pillar_page_bucket_module' ): ?>
    <section class="pillar-page-bucket-module" id="<?php echo get_sub_field('ppbucketm_section_id');?>">
    	<div class="inner-wrap-fullwidth">
    			<?php if(get_sub_field('ppbucketm_heading')):?> 
			    	<h2 class="ppbucketm-heading"><?php echo get_sub_field('ppbucketm_heading');?></h2>
				<?php endif;?> 
    			<?php if( get_sub_field('ppbucketm_content')): ?>
                <div class="ppbucketm-content"><?php echo get_sub_field('ppbucketm_content'); ?></div>
                <?php endif; ?>
                <div class="pptm-items-wrap">
                	<?php if( have_rows('ppbucketm_items') ): while ( have_rows('ppbucketm_items') ) : the_row(); ?>
                		<div class="ppbucketm-item">
                			<?php $link = get_sub_field('ppbucketm_link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
                			<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"class="ppbucketm-link">
	                			<?php $image = get_sub_field('ppbucketm_image');
								if( !empty( $image ) ): ?>
									<figure class="ppbucketm-image"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" /></figure>
								<?php endif; ?>
								<?php if(get_sub_field('ppbucketm_title')):?> 
							    	<span class="ppbucketm-title"><?php echo get_sub_field('ppbucketm_title');?></span>
								<?php endif;?> 
							</a>
						<?php endif; ?>
                		</div>
                	<?php endwhile; endif; ?>	
				</div>

    	</div>
    </section>
    <?php elseif( get_row_layout() == 'pillar_page_commercial_settings_module' ): ?>
    <section class="pillar-page-commercial-settings-module" id="<?php echo get_sub_field('ppcsm_section_id');?>">
    	<div class="inner-wrap-fullwidth">
    			<?php if(get_sub_field('ppcsm_heading')):?> 
			    	<h2 class="ppcsm-heading"><?php echo get_sub_field('ppcsm_heading');?></h2>
				<?php endif;?> 
				<?php if(get_sub_field('ppcsm_subheading')):?> 
			    	<h3 class="ppcsm-subheading"><?php echo get_sub_field('ppcsm_subheading');?></h3>
				<?php endif;?> 
				<?php if(get_sub_field('ppcsm_subtext')):?> 
			    	<p class="ppcsm-subtext"><?php echo get_sub_field('ppcsm_subtext');?></p>
				<?php endif;?>    			
                <div class="ppcsm-items-wrap">
                	<?php if( have_rows('ppcsm_items') ): while ( have_rows('ppcsm_items') ) : the_row(); ?>
                		<div class="ppcsm-item">
                			<div class="ppcsmi-inner">
	                			<?php $image = get_sub_field('ppcsm_icon');
								if( !empty( $image ) ): ?>
									<figure class="ppcsm-icon"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" /></figure>
								<?php endif; ?>
								<?php if(get_sub_field('ppcsm_title')):?> 
							    	<span class="ppcsm-title"><?php echo get_sub_field('ppcsm_title');?></span>
								<?php endif;?> 
							</div>
                		</div>
                	<?php endwhile; endif; ?>	
				</div>
				<?php if( get_sub_field('ppcsm_content')): ?>
                <div class="ppcsm-content"><?php echo get_sub_field('ppcsm_content'); ?></div>
                <?php endif; ?>

    	</div>
    </section>
    <?php elseif( get_row_layout() == 'pillar_page_product_list_module' ): ?>
    <section class="pillar-page-product-list-module" id="<?php echo get_sub_field('ppplm_section_id');?>" <?php if(get_sub_field('pppl_background_color')):?>style="background-color: <?php echo get_sub_field('pppl_background_color');?>"<?php endif;?>>
    	<div class="inner-wrap-fullwidth <?php if(get_sub_field('ppplm_large_top_padding')):?>ltp-iwf<?php endif;?>"> 
    	<?php if(get_sub_field('ppplm_section_heading')):?> 
					<h2 class="ppplm-section-heading"><?php echo get_sub_field('ppplm_section_heading');?></h2>
				<?php endif;?>
				<?php if(get_sub_field('ppplm_section_content')):?> 
					<div class="ppplm-section-content"><?php echo get_sub_field('ppplm_section_content');?></div>
				<?php endif;?>  			
            <div class="ppplm-items-wrap">            	
                	<?php if( have_rows('ppplm_items') ): while ( have_rows('ppplm_items') ) : the_row(); ?>
                		<div class="ppplm-item" id="<?php echo get_sub_field('ppplm_id');?>">
                			<?php $images = get_sub_field('ppplm_gallery'); ?>
                			<div class="ppplmi-inner">
                				<div class="ppplm-left<?php if( $images ): ?> ppplm-left-width<?php endif; ?>">
								<?php if(get_sub_field('ppplm_title')):?> 
							    	<h2 class="ppplm-title"><?php echo get_sub_field('ppplm_title');?></h2>
								<?php endif;?> 
								<?php if(get_sub_field('ppplm_content')):?> 
							    	<div class="ppplm-content"><?php echo get_sub_field('ppplm_content');?></div>
								<?php endif;?> 
								<?php $link = get_sub_field('ppplm_cta');
								if( $link ): 
								    $link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
								    ?>
								    <div class="ppplm-cta-wrap"><a class="btn ppplm-cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></div>
								<?php endif; ?>
                				</div>
								<?php if( $images ): ?>
                			<div class="ppplm-right">
                			<div class="ppplm-slider">		    	
					        <?php foreach( $images as $image ): ?>
					        	<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
					        <?php endforeach; ?>
							</div>
			                </div>
                				<?php endif; ?>
							</div>
                		</div>
                	<?php endwhile; endif; ?>	
				</div>
    	</div>
    </section>

	<!-- Icon Grid Module Start -->
	<?php elseif( get_row_layout() == 'grid_with_icon_module' ): ?>

		<section class="grid-with-icon-module">
			<div class="inner-wrap-fullwidth">
					<?php if(get_sub_field('gwim_content')):?> 
					<div class="gwim-content"><?php echo get_sub_field('gwim_content');?></div>
					<?php endif;?> 

                	<?php if( have_rows('gwim_icon_grid') ):  ?>
						<div class="gwim-items-wrap">  
							<?php while ( have_rows('gwim_icon_grid') ) : the_row(); ?>
							<div class="gwim-item">
									<?php $image = get_sub_field('gwim_icon');
									if( !empty( $image ) ): ?>
										<figure class="gwim-icon"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" /></figure>
									<?php endif; ?>
									<?php if(get_sub_field('gwim_description')):?> 
									<div class="gwim-desc"><?php echo get_sub_field('gwim_description');?></div>
									<?php endif;?> 
							</div>
							<?php endwhile;?>
						</div>
					<?php endif; ?>
			</div>							
		</section>
		<!-- Icon Grid Module End -->
<!-- Landing Page Icon Grid Module Start -->
		<?php elseif( get_row_layout() == 'lp_grid_with_icon_module' ): ?>
			<section class="lp-icon-grid-module  <?php echo get_sub_field('class');?>">
			<div class="inner-wrap">
			<?php if(get_sub_field('lp_icm_head')):?> 	<h2><?php echo get_sub_field('lp_icm_head');?></h2><?php endif;?> 

<?php if( have_rows('lp_icm_icon_grid') ):  ?>
		<div class="lp_icm-items-wrap">  
			<?php while ( have_rows('lp_icm_icon_grid') ) : the_row(); ?>
			<div class="lp-icm-item">
					<?php $image = get_sub_field('lp_icm_icon');
					if( !empty( $image ) ): ?>
						<figure class="lp-icm-icon"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" /></figure>
					<?php endif; ?>
					<?php if(get_sub_field('lp_icm_description')):?> 
					<div class="lp-icm-desc"><?php echo get_sub_field('lp_icm_description');?></div>
					<?php endif;?> 
			</div>
			<?php endwhile;?>
		</div>
	<?php endif; ?>
			</div>

			</section>
<!-- Landing Page Icon Grid Module end-->
<!--Image Slider with Content start-->
<?php elseif( get_row_layout() == 'image_slider_with_content' ): ?>
		<section class="image-silder-with-content" id="img_slider_with_thumbnails<?php echo $i ?>">
	        <div class="inner-wrap">
	          	<?php if( get_sub_field('imt_section_header')): ?>
					<h2><?php echo get_sub_field('imt_section_header'); ?></h2>
				<?php endif; ?>
				<div class="iswc-wrap">
				<?php if( get_sub_field('igwtc_content')): ?>
		        <div class="igwc-content">
		        	<?php echo get_sub_field('igwtc_content'); ?>
		        </div>
		        <?php endif; ?>
				<div class="innerpage-carousel<?php if( get_sub_field('gallery_position_to_right')): ?> igwc-right<?php endif; ?><?php if( get_sub_field('gallery_position_to_left')): ?> igwc-left<?php endif; ?>">
	                <div id="slider" class="icwt-slider popup-gallery">
				        <?php $images = get_sub_field('imgwt_gallery');
						if( $images ): ?>
							<?php foreach( $images as $image ): ?>
								
				          		<div class="igwc-gal-lg-item"><a href="<?php echo $image['sizes']['large']; ?>" class=""><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>"></a>
								  <?php if ($image['caption']) { ?><p>  <figcaption><?php echo esc_html($image['caption']); ?></figcaption></p><?php } ?>
							</div>
				           <?php endforeach; ?>
						<?php endif; ?> 
			        </div>
		        </div>
	       	
				</div>

	       		<?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>
	        </div>
        </section>
<!--Image Slider with Content end-->

<?php elseif( get_row_layout() == 'content_with_right_image_new_module' ): ?>
    <section class="content-with-right-image-new-module" id="<?php echo get_sub_field('cwrimn_section_id');?>">
    	<div class="inner-wrap">
    			<?php if(get_sub_field('cwrimn_heading')):?> 
			    	<h2 class="cwrimn-heading"><?php echo get_sub_field('cwrimn_heading');?></h2>
				<?php endif;?> 
				<div class="cwrimn-wrap">
					<div class="cwrimn-content-wrap">
		    			<?php if( get_sub_field('cwrimn_content')): ?>
		                <div class="cwrimn-content"><?php echo get_sub_field('cwrimn_content'); ?></div>
		                <?php endif; ?>
		            </div>
		            <div class="cwrimn-img-wrap">
						<?php $image = get_sub_field('cwrimn_image');
							if( !empty( $image ) ): ?>
								<figure class="cwrimn_image"><a class="lightbox" href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" /></a></figure>
							<?php endif; ?>
		            </div>
		        </div>
		        <?php if(get_sub_field('cwrimn_description')):?> 
			    	<span class="cwrimn-description"><?php echo get_sub_field('cwrimn_description');?></span>
				<?php endif;?>
    	</div>
    </section>

<?php elseif( get_row_layout() == 'pillar_page_bucket_new_module' ): ?>
    <section class="pillar-page-bucket-new-module" id="<?php echo get_sub_field('ppbucketmn_section_id');?>">
    	<div class="inner-wrap">
    			<?php if(get_sub_field('ppbucketmn_heading')):?> 
			    	<h2 class="ppbucketmn-heading"><?php echo get_sub_field('ppbucketmn_heading');?></h2>
				<?php endif;?> 
    			<?php if( get_sub_field('ppbucketmn_content')): ?>
                <div class="ppbucketmn-content"><?php echo get_sub_field('ppbucketmn_content'); ?></div>
                <?php endif; ?>
                <div class="pptm-items-wrap">
                	<?php if( have_rows('ppbucketmn_items') ): while ( have_rows('ppbucketmn_items') ) : the_row(); ?>
                		<div class="ppbucketmn-item">
                			<?php $link = get_sub_field('ppbucketmn_link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
                			<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"class="ppbucketmn-link">
	                			<?php $image = get_sub_field('ppbucketmn_image');
								if( !empty( $image ) ): ?>
									<figure class="ppbucketmn-image"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" /></figure>
								<?php endif; ?>
								<?php if(get_sub_field('ppbucketmn_title')):?> 
							    	<span class="ppbucketmn-title"><?php echo get_sub_field('ppbucketmn_title');?></span>
								<?php endif;?> 
							</a>
						<?php endif; ?>
                		</div>
                	<?php endwhile; endif; ?>	
				</div>

    	</div>
    </section>

<?php elseif( get_row_layout() == 'medical_air_types_module' ): ?>
    <section class="medical-air-types-module" id="<?php echo get_sub_field('matm_section_id');?>">
    	<div class="inner-wrap">
    		<?php if(get_sub_field('matm_heading')):?> 
		    	<h2 class="matm-heading"><?php echo get_sub_field('matm_heading');?></h2>
			<?php endif;?> 
			<?php if( get_sub_field('matm_content')): ?>
            <div class="matm-content"><?php echo get_sub_field('matm_content'); ?></div>
            <?php endif; ?>
    	</div>
    </section>

<?php elseif( get_row_layout() == 'medical_air_guides_module' ): ?>
<section class="medical-air-guides-module" id="<?php echo get_sub_field('magm_section_id');?>">
	<div class="inner-wrap">
		<?php if(get_sub_field('magm_heading')):?> 
	    	<h2 class="magm-heading"><?php echo get_sub_field('magm_heading');?></h2>
		<?php endif;?> 
		<?php if( get_sub_field('magm_content')): ?>
        <div class="magm-content"><?php echo get_sub_field('magm_content'); ?></div>
        <?php endif; ?>

	    <div class="magm-items-wrap">
	    	<?php if( have_rows('magm_items') ): while ( have_rows('magm_items') ) : the_row(); ?>
	    		<div class="magm-item">
	    			<div class="magm-subheading-wrap">
		        	<?php if(get_sub_field('magm_subheading')):?> 
			    	<span class="magm-subheading"><?php echo get_sub_field('magm_subheading');?></span>
				    <?php endif;?>
				    </div>
					<div class="magm-content-wrap">
						<?php if( get_sub_field('magm_bottom_content')): ?>
			            <div class="magm-bottom-content"><?php echo get_sub_field('magm_bottom_content'); ?></div>
			            <?php endif; ?>
			        </div>
	    		</div>
	    	<?php endwhile; endif; ?>	
		</div>

	</div>
</section>

<?php elseif( get_row_layout() == 'pillar_page_types_new_module' ): ?>
    <section class="pillar-page-types-new-module" id="<?php echo get_sub_field('pptmn_section_id');?>">
    	<div class="inner-wrap">
    			<?php if(get_sub_field('pptmn_heading')):?> 
			    	<h2 class="pptmn-heading"><?php echo get_sub_field('pptmn_heading');?></h2>
				<?php endif;?> 
    			<?php if( get_sub_field('pptmn_content')): ?>
                <div class="pptmn-content"><?php echo get_sub_field('pptmn_content'); ?></div>
                <?php endif; ?>
                <div class="pptmn-items-wrap">
                	<?php if( have_rows('pptmn_items') ): while ( have_rows('pptmn_items') ) : the_row(); ?>
                		<div class="pptmn-item">
                			<div class="pptmni-inner">
	                			<?php $image = get_sub_field('pptmn_icon');
								if( !empty( $image ) ): ?>
									<figure class="pptmn-icon"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" /></figure>
								<?php endif; ?>
								<?php if(get_sub_field('pptmn_title')):?> 
							    	<span class="pptmn-title"><?php echo get_sub_field('pptmn_title');?></span>
								<?php endif;?> 
							</div>
                		</div>
                	<?php endwhile; endif; ?>	
				</div>
                <?php if( get_sub_field('pptmn_subtext')): ?>
                <span class="pptmn-subtext"><?php echo get_sub_field('pptmn_subtext'); ?></span>
                <?php endif; ?>
                <?php 
                $link = get_sub_field('pptmn_link');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="pptmn-link btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
    	</div>
    </section>

<?php elseif( get_row_layout() == 'applications_for_medical_air_module' ): ?>
<section class="applications-for-medical-air-module" id="<?php echo get_sub_field('afmam_section_id');?>">
	<div class="inner-wrap">
		<?php if(get_sub_field('afmam_heading')):?> 
	    	<h2 class="afmam-heading"><?php echo get_sub_field('afmam_heading');?></h2>
		<?php endif;?> 
		<?php if( get_sub_field('afmam_content')): ?>
        <div class="afmam-content"><?php echo get_sub_field('afmam_content'); ?></div>
        <?php endif; ?>

        <div class="afmam-items-wrap-one">
	    	<?php if( have_rows('afmam_items_one') ): while ( have_rows('afmam_items_one') ) : the_row(); ?>
	    		<div class="afmam-item-one">
	    			<div class="afmam-one-subheading-wrap">
		        	<?php if(get_sub_field('afmam_subheading_one')):?> 
			    	<span class="afmam-one-subheading"><?php echo get_sub_field('afmam_subheading_one');?></span>
				    <?php endif;?>
				    </div>
					<div class="afmam-one-content-wrap">
						<?php if( get_sub_field('afmam_bottom_content_one')): ?>
			            <div class="afmam-bottom-content-one"><?php echo get_sub_field('afmam_bottom_content_one'); ?></div>
			            <?php endif; ?>
			        </div>
	    		</div>
	    	<?php endwhile; endif; ?>	
		</div>

	    <div class="afmam-items-wrap">
	    	<?php if( have_rows('afmam_items') ): while ( have_rows('afmam_items') ) : the_row(); ?>
	    		<div class="afmam-item">
	    			<div class="afmam-subheading-wrap">
		        	<?php if(get_sub_field('afmam_subheading')):?> 
			    	<span class="afmam-subheading"><?php echo get_sub_field('afmam_subheading');?></span>
				    <?php endif;?>
				    </div>
					<div class="afmam-content-wrap">
						<?php if( get_sub_field('afmam_bottom_content')): ?>
			            <div class="afmam-bottom-content"><?php echo get_sub_field('afmam_bottom_content'); ?></div>
			            <?php endif; ?>
			        </div>
	    		</div>
	    	<?php endwhile; endif; ?>	
		</div>

	</div>
</section>

<?php elseif( get_row_layout() == 'pillar_page_fifty_years_module' ): ?>
    <section class="pillar-page-fifty-years-module" id="<?php echo get_sub_field('ppfym_section_id');?>">
    	<div class="inner-wrap">
    			<?php if(get_sub_field('ppfym_heading')):?> 
			    	<h2 class="ppfym-heading"><?php echo get_sub_field('ppfym_heading');?></h2>
				<?php endif;?> 
    			<?php if( get_sub_field('ppfym_content')): ?>
                <div class="ppfym-content"><?php echo get_sub_field('ppfym_content'); ?></div>
                <?php endif; ?>
                <div class="ppfym-items-wrap">
                	<?php if( have_rows('ppfym_items') ): while ( have_rows('ppfym_items') ) : the_row(); ?>
                		<div class="ppfym-item">
                			<?php $link = get_sub_field('ppfym_link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
                			<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"class="ppfym-link">
	                			<?php $image = get_sub_field('ppfym_image');
								if( !empty( $image ) ): ?>
									<figure class="ppfym-image"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" /></figure>
								<?php endif; ?>
								<?php if(get_sub_field('ppfym_title')):?> 
							    	<span class="ppfym-title"><?php echo get_sub_field('ppfym_title');?></span>
								<?php endif;?> 
							</a>
						<?php endif; ?>
                		</div>
                	<?php endwhile; endif; ?>	
				</div>

    	</div>
    </section>

<?php elseif( get_row_layout() == 'pillar_page_click_expand' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
			<section class="pillar-page-click-expand">
				<div class="inner-wrap">
					<?php if(get_sub_field('ppce_heading')):?> 
				    	<h2 class="ppce-heading"><?php echo get_sub_field('ppce_heading');?></h2>
					<?php endif;?>
					<?php if( have_rows('click_expand_items') ): ?>
					  <?php while( have_rows('click_expand_items') ): the_row(); ?>
					    <div class="click-expand <?php if( get_sub_field('spacing')): ?>spacing-bottom<?php endif; ?>">
					      <h3 class="ce-header" tabindex="0"><?php echo get_sub_field('section_header'); ?></h3>
					      <div class="ce-body"><?php echo get_sub_field('section_body'); ?></div>
					    </div>
					  <?php endwhile; ?>
					<?php endif; ?>

			    </div>
			</section>	        
		<?php endif; ?>






 	<?php elseif( get_row_layout() == 'multiple_columns_module' ): ?>
<?php 
$custom_id = get_sub_field('custom_id'); 
?>

		<section class="two-cols-module <?php echo get_sub_field('content_column_class'); ?>" <?php if($custom_id): ?> id="<?php echo esc_attr($custom_id); ?>" <?php endif; ?>>
			<div class="inner-wrap">

				<?php if( get_sub_field('section_header')): ?>
					<h2><?php echo get_sub_field('section_header'); ?></h2>
				<?php endif; ?>

				<?php if( get_sub_field('section_subtext')): ?>
					<p class="column-subtext"><?php echo get_sub_field('section_subtext'); ?></p>
				<?php endif; ?>

				<div class="two-cols-wrapper">
					<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
						<div class="two-col-item"><?php echo get_sub_field('content_column'); ?></div>
					<?php endwhile; endif; ?>
				</div>

				<?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>

			</div>
		</section>



<?php elseif( get_row_layout() == 'rapid_tab_modules' ): ?>
<section class="rapid-tabs-module">
    <div class="inner-wrap-wide">

        <!-- Horizontal Tabs -->
        <div id="horizontalTab">
            <ul>
                <?php if( have_rows('rt_tabs') ): $i = 1; while ( have_rows('rt_tabs') ) : the_row(); ?>
                    <li>
                        <a href="#tab-<?php echo $i; ?>" class="<?php echo ($i === 1) ? 'active' : ''; ?>">
                            <span><?php echo get_sub_field('rt_title'); ?></span>
                        </a>
                    </li>
                <?php $i++; endwhile; endif; ?>
            </ul>

            <!-- Tab Panels -->
            <?php if( have_rows('rt_tabs') ): $i = 1; while ( have_rows('rt_tabs') ) : the_row(); ?>
                <div id="tab-<?php echo $i; ?>" class="tab-panel <?php echo ($i === 1) ? 'active' : ''; ?>">
                    <div class="tab-panel-content">
                        <div class="tab-image">
                            <?php if(get_sub_field('rt_image')): 
                                $rt_image = get_sub_field('rt_image'); ?>
                                <img src="<?php echo esc_url($rt_image['url']); ?>" alt="<?php echo esc_attr($rt_image['title']); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="tab-text">
                            <?php if(get_sub_field('rt_description')): ?>
                                <p><?php echo get_sub_field('rt_description'); ?></p>
                            <?php endif; ?>

                            <?php
                            $rt_link = get_sub_field('rt_link');
                            if($rt_link):
                                $link_url = $rt_link['url'];
                                $link_title = $rt_link['title'];
                                $link_target = $rt_link['target'] ? $rt_link['target'] : '_self';
                            ?>
                                <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="btn rt-btn">
                                    <?php echo esc_html($link_title); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php $i++; endwhile; endif; ?>

        </div>
        <!-- End Horizontal Tabs -->

    </div>
</section>







<?php elseif( get_row_layout() == 'cta_banner_module' ): 
	$bg_image = get_sub_field('background_image');
	$cta_button = get_sub_field('cta_button');
?>

<section class="cta-overlay-banner" <?php if( $bg_image ): ?>style="background-image: url('<?php echo esc_url( $bg_image['url'] ); ?>');"<?php endif; ?>>
	<div class="cta-overlay-banner__overlay">
		<div class="inner-wrap">
			<div class="cta-overlay-banner__row">

				<div class="cta-overlay-banner__content">
					<?php if( get_sub_field('heading') ): ?>
						<h2 class="cta-overlay-banner__title"><?php echo esc_html( get_sub_field('heading') ); ?></h2>
					<?php endif; ?>

					<?php if( get_sub_field('description') ): ?>
						<div class="cta-overlay-banner__desc">
							<?php echo esc_html( get_sub_field('description') ); ?>
						</div>
					<?php endif; ?>
				</div>

				<?php if( $cta_button ): 
					$link_url = $cta_button['url'];
					$link_title = $cta_button['title'];
					$link_target = $cta_button['target'] ? $cta_button['target'] : '_self';
				?>
					<div class="cta-overlay-banner__button">
						<a class="btn cta-overlay-banner__btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
							<?php echo esc_html( $link_title ); ?>
						</a>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>




<?php elseif( get_row_layout() == 'right_image_content_module' ): 
	$right_image = get_sub_field('right_image');
?>
<?php 
$custom_id = get_sub_field('custom_id'); 
?>
<section class="image-content-module" <?php if($custom_id): ?> id="<?php echo esc_attr($custom_id); ?>" <?php endif; ?>>
	<div class="inner-wrap">
		<div class="image-content-module__row">

			<div class="image-content-module__content">
				<?php if( get_sub_field('heading') ): ?>
					<h2 class="image-content-module__title">
						<?php echo esc_html( get_sub_field('heading' ) ); ?>
					</h2>
				<?php endif; ?>

				<?php if( get_sub_field('description') ): ?>
					<div class="image-content-module__desc">
						<?php echo get_sub_field('description'); ?>
					</div>
				<?php endif; ?>
			</div>

			<?php if( $right_image ): ?>
				<div class="image-content-module__image">
					<img src="<?php echo esc_url( $right_image['url'] ); ?>" alt="<?php echo esc_attr( $right_image['alt'] ); ?>">
				</div>
			<?php endif; ?>

		</div>
	</div>
</section>



<?php elseif( get_row_layout() == 'maintenance_checklist_banner' ): 
	$bg_image = get_sub_field('background_image');
	$side_image = get_sub_field('side_image');
	$cta_button = get_sub_field('cta_button');
?>

<section class="maintenance-checklist-banner" <?php if( $bg_image ): ?>style="background-image: url('<?php echo esc_url( $bg_image['url'] ); ?>');"<?php endif; ?>>
	<div class="banner-overlay">
		<div class="inner-wrap">
			<div class="maintenance-checklist-banner__row">

				<div class="maintenance-checklist-banner__content">
					<?php if( get_sub_field('heading') ): ?>
						<h2 class="maintenance-checklist-banner__title"><?php echo esc_html( get_sub_field('heading') ); ?></h2>
					<?php endif; ?>

					<?php if( get_sub_field('description') ): ?>
						<div class="maintenance-checklist-banner__desc">
							<?php echo get_sub_field('description'); ?>
						</div>
					<?php endif; ?>

					<?php if( $cta_button ): 
						$link_url = $cta_button['url'];
						$link_title = $cta_button['title'];
						$link_target = $cta_button['target'] ? $cta_button['target'] : '_self';
					?>
						<a class="btn maintenance-checklist-banner__btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
							<?php echo esc_html( $link_title ); ?>
						</a>
					<?php endif; ?>
				</div>

				<?php if( $side_image ): ?>
					<div class="maintenance-checklist-banner__image">
						<img src="<?php echo esc_url( $side_image['url'] ); ?>" alt="<?php echo esc_attr( $side_image['alt'] ); ?>">
					</div>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>




<?php elseif( get_row_layout() == 'service_banner_module' ): ?>

<section class="center-content-banner" style="background-image: url('<?php echo esc_url( get_sub_field('background_image')['url'] ); ?>');">
	<div class="banner-overlay">
		<div class="inner-wrap">
			<div class="banner-content">

				<?php if( get_sub_field('heading') ): ?>
					<h2 class="banner-title"><?php echo esc_html( get_sub_field('heading') ); ?></h2>
				<?php endif; ?>

				<?php if( get_sub_field('description') ): ?>
					<div class="banner-desc">
						<?php echo get_sub_field('description'); ?>
					</div>
				<?php endif; ?>

				<?php 
				$btn1 = get_sub_field('button_1');
				$btn2 = get_sub_field('button_2');
				?>

				<?php if( $btn1 || $btn2 ): ?>
					<div class="banner-buttons">

						<?php if( $btn1 ): ?>
							<a href="<?php echo esc_url($btn1['url']); ?>" 
							   target="<?php echo esc_attr($btn1['target'] ?: '_self'); ?>" 
							   class="btn btn-crr">
								<?php echo esc_html($btn1['title']); ?>
							</a>
						<?php endif; ?>

						<?php if( $btn2 ): ?>
							<a href="<?php echo esc_url($btn2['url']); ?>" 
							   target="<?php echo esc_attr($btn2['target'] ?: '_self'); ?>" 
							   class="btn btn-sce-rfq">
								<?php echo esc_html($btn2['title']); ?>
							</a>
						<?php endif; ?>

					</div>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>




<?php elseif( get_row_layout() == 'partners_module' ): ?>  
<section class="partners-module">
	<div class="inner-wrap">
		<div class="partners-row">

			<?php if( get_sub_field('partners_heading') ): ?>
				<div class="partners-heading">
					<h2><?php echo esc_html( get_sub_field('partners_heading') ); ?></h2>
				</div>
			<?php endif; ?>

			<?php if( have_rows('partners_icon') ): ?>
				<div class="partners-icons">
					<?php while( have_rows('partners_icon') ): the_row(); 
						$icon = get_sub_field('partner_icon');
						$hover_icon = get_sub_field('partner_icon_hover');
						$link = get_sub_field('partner_link'); // NEW FIELD
					?>

						<?php if( $icon ): ?>
							<div class="partner-icon-item">

								<?php if( $link ): ?>
									<a href="<?php echo esc_url($link['url']); ?>" 
									   target="<?php echo esc_attr($link['target'] ?: '_self'); ?>">
								<?php endif; ?>

								<div class="partner-icon-wrap">
									<img  
										class="partner-icon default-icon" 
										src="<?php echo esc_url($icon['url']); ?>"  
										alt="<?php echo esc_attr($icon['alt']); ?>"
									>

									<?php if( $hover_icon ): ?>
										<img  
											class="partner-icon hover-icon" 
											src="<?php echo esc_url($hover_icon['url']); ?>" 
											alt="<?php echo esc_attr($hover_icon['alt']); ?>"
										>
									<?php endif; ?>
								</div>

								<?php if( $link ): ?>
									</a>
								<?php endif; ?>

							</div>
						<?php endif; ?>

					<?php endwhile; ?>
				</div>
			<?php endif; ?>

		</div>
	</div>
</section>



<?php elseif( get_row_layout() == 'tab_content_pillar' ): ?>
<?php 
$custom_id = get_sub_field('custom_id'); 
?>
<!-- <div  class="ppid"> -->
<section class="accordian-tabs-module custom-tab-layout" <?php if($custom_id): ?> id="<?php echo esc_attr($custom_id); ?>" <?php endif; ?>>
    <div class="inner-wrap-fullwidth">

        <?php if( have_rows('tab_content_row') ): ?>

            <!-- TABS -->
            <ul class="accordion-tabs">
                <?php $i = 0; ?>
                <?php while ( have_rows('tab_content_row') ) : the_row(); ?>

                    <li class="tab-header">
                        <a href="javascript:void(0)" 
                           class="tab-link <?php echo ($i === 0) ? 'is-active' : ''; ?>" 
                           data-tab="tab-<?php echo $i; ?>">
                            <?php echo get_sub_field('tab_header'); ?>
                        </a>
                    </li>

                <?php $i++; endwhile; ?>
            </ul>

            <!-- CONTENT (FULL WIDTH) -->
            <div class="tab-contents">

                <?php $i = 0; ?>
                <?php while ( have_rows('tab_content_row') ) : the_row(); ?>

                    <div id="tab-<?php echo $i; ?>" 
                         class="tab-content <?php echo ($i === 0) ? 'is-open' : ''; ?>">

                        <?php if( get_sub_field('section_header')): ?>
                            <h2 class="tab-main-heading">
                                <?php echo get_sub_field('section_header'); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if( get_sub_field('section_desc')): ?>
                            <div class="tab-main-desc">
                                <?php echo get_sub_field('section_desc'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="tab-flex">

                            <div class="tab-image">
                                <?php 
                                $image = get_sub_field('tab_image');
                                if( $image ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" 
                                         alt="<?php echo esc_attr($image['alt']); ?>">
                                <?php endif; ?>
                            </div>

                            <div class="tab-text">
                                <?php echo get_sub_field('tab_body'); ?>
                            </div>

                        </div>

                    </div>

                <?php $i++; endwhile; ?>

            </div>

        <?php endif; ?>

    </div>
</section>
<!-- </div> -->







<?php endif; ?>
<?php endwhile; echo '</section>'; ?>
<?php endif; ?>




