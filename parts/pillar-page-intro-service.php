<!-- Site Content -->
<?php 
$pi_image = get_field('pi_image'); 
$custom_class = get_field('cuctome_class');
?>

<section class="pillar-page-intro-service <?php echo $custom_class ? esc_attr($custom_class) : ''; ?>" 
         style="background-image: url(<?php echo esc_url($pi_image['url']); ?>);">
    <div class="inner-wrap">
        <div class="ppi-wrap">
            <div class="psi-text">
                <?php if(get_field('ppi_heading')): ?>
                    <h1 class="page-header"><?php echo esc_html(get_field('ppi_heading')); ?></h1>
                <?php else: ?>
                    <h1 class="page-header"><?php the_title(); ?></h1>
                <?php endif; ?>

                <?php if(get_field('pi_desc')): ?>
                    <p class="page-desc"><?php echo esc_html(get_field('pi_desc')); ?></p>
                <?php endif; ?>
            </div>

            <!-- Anchor Links -->
            <section class="anchor-links-nav-wrap">
                <ul class="anchor-links-wrap">
                    <?php if( have_rows('internal_anchor_links') ):
                        $i = 1;
                        while ( have_rows('internal_anchor_links') ) : the_row(); 
                            $link = get_sub_field('ial_links');
                            if($link): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <li class="alw-<?php echo $i; ?>">
                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="smooth-scroll">
                                <?php echo esc_html($link_title); ?>
                            </a>
                        </li>
                    <?php 
                            endif;
                        $i++; 
                        endwhile; 
                    endif; ?>
                </ul>
            </section>
        </div>
    </div>

    <!-- Optional new anchor links section -->
    <section class="anchor-links-nav-new">
        <ul class="anchor-links-wrap">
            <?php if( have_rows('internal_anchor_links') ):
                $i = 1;
                while ( have_rows('internal_anchor_links') ) : the_row(); 
                    $link = get_sub_field('ial_links');
                    if($link): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                <li class="alw-<?php echo $i; ?>">
                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="smooth-scroll">
                        <?php echo esc_html($link_title); ?>
                    </a>
                </li>
            <?php 
                    endif;
                $i++;
                endwhile;
            endif; ?>
        </ul>
    </section>
</section>

<!-- CTA OVERLAP CARD -->
<?php if(get_field('cta_heading')): ?>
    <div class="intro-cta-card">
        <div class="cta-content">
            <h3><?php echo esc_html(get_field('cta_heading')); ?></h3>

            <?php if(get_field('cta_description')): ?>
                <p><?php echo esc_html(get_field('cta_description')); ?></p>
            <?php endif; ?>
             <?php 
            $cta_button = get_field('cta_button_link');
            if($cta_button): 
                $link_url = $cta_button['url'];
                $link_title = $cta_button['title'];
                $link_target = $cta_button['target'] ? $cta_button['target'] : '_self';
            ?>
                <a class="cta-btn-pillar-page" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                    <?php echo esc_html($link_title); ?>
                </a>
            <?php endif; ?>
        </div>

        <?php 
        $cta_image = get_field('cta_image');
        if($cta_image): ?>
            <div class="cta-image">
                <img src="<?php echo esc_url($cta_image['url']); ?>" alt="<?php echo esc_attr($cta_image['alt']); ?>">
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>

<!-- Next Section -->
<section class="next-section">
    <!-- Your next section content goes here -->
</section>