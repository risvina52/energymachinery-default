<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<title><?php wp_title( '|' ); ?></title>
		<?php if( get_field('ga_on_off','options') == true ): ?>
		<?php if( get_field('ga_gtm_code','options')): ?>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','<?php echo get_field('ga_gtm_code','options'); ?>');</script>
		<!-- End Google Tag Manager -->
		<?php endif; ?>
		<?php endif; ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&family=Barlow+Condensed:wght@400;500;600;700&display=swap">
		<!-- <link rel="shortcut icon" href="<?php //echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/> -->
		<?php wp_head(); ?>
		<!--[if lt IE 9]>
            <script src="<?php bloginfo('template_url'); ?>/js/vendor/respond.min.js"></script> <script src="<?php bloginfo('template_url'); ?>/js/vendor/selectivizr-min.js"></script>
        <![endif]-->
        <?php $blog_id = get_option('page_for_posts'); ?>
        <?php if(get_field('before_the_head','options')):?>
        	<?php echo get_field('before_the_head','options'); ?>
        <?php endif;?>
        <?php if(is_home() && get_field('before_the_head', $blog_id)):?>
        	<?php echo get_field('before_the_head', $blog_id); ?>
        <?php endif ?>
        <?php if(get_field('before_the_head')):?>
        	<?php echo get_field('before_the_head'); ?>
        <?php endif ?>
	</head>
	<body <?php body_class(); ?>>
	<?php if( get_field('ga_on_off','options') == true ): ?>
		<?php if( get_field('ga_gtm_code','options')): ?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo get_field('ga_gtm_code','options'); ?>"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php endif; ?>
	<?php endif; ?>
	<?php if(get_field('after_the_body','options')):?>
        	<?php echo get_field('after_the_body','options'); ?>
    <?php endif;?>
    <?php if(is_home() && get_field('after_the_body', $blog_id)):?>
        <?php echo get_field('after_the_body', $blog_id); ?>
    <?php endif ?>
	<?php if(get_field('after_the_body')):?>
        	<?php echo get_field('after_the_body'); ?>
    <?php endif;?>
        <a href="javascript:void(0)" class="btn-alt" id="skipToContent">Skip to Content</a>
		<!-- Site Wrap Start -->
		<div class="site-wrap site-header-wrap gdd-005-b">