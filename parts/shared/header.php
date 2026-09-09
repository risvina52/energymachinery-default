<?php
/**
 * Redesign Header Template
 *
 * Exclusively loaded on the Redesign Page template (template-redesign.php).
 */
defined( 'ABSPATH' ) || exit;

$rh_logo      = get_field( 'global_company_logo', 'option' );
$rh_toll_free = get_field( 'global_toll_free', 'option' );
$rh_toll_tel  = preg_replace( '/[^0-9]/', '', (string) $rh_toll_free );
$rh_email     = get_field( 'global_email', 'option' );
$rh_catalog   = get_field( 'global_catalog', 'option' );
$rh_contact   = get_field( 'global_contact_link', 'option' );
$rh_rfq       = get_field( 'global_rfq_link', 'option' );

$rh_contact_url    = $rh_contact['url'] ?? '#';
$rh_contact_title  = $rh_contact['title'] ?? 'Contact Us';
$rh_contact_target = $rh_contact['target'] ?? '_self';
$rh_rfq_url        = $rh_rfq['url'] ?? '#';
$rh_rfq_title      = $rh_rfq['title'] ?? 'Request a Quote';
$rh_rfq_target     = $rh_rfq['target'] ?? '_self';
?>

<style id="rh-search-critical">
/* Critical fallback (inline so it can't be defeated by a stale CSS cache):
   keep the search overlay collapsed by default and cap the search icons so
   they never blow up to full-screen if the main stylesheet is delayed. */
.rh-search-panel { max-height: 0; overflow: hidden; visibility: hidden; }
.rh-search-panel.is-open { max-height: 200px; visibility: visible; }
.rh-search-form-icon, .rh-search-close svg, .rh-mobile-search-icon, .rh-mobile-search-submit svg { width: 22px; height: 22px; flex: 0 0 auto; }
.rh-search-toggle svg { width: 17px; height: 17px; }
</style>

<header class="rh-header <?php echo ! is_front_page() ? 'rh-header-page' : ''; ?>" id="rh-header" role="banner">
    <div class="rh-utility">
        <div class="rh-utility-inner">
            <div class="rh-utility-tagline">New England's Compressed Air Specialists</div>
            <div class="rh-utility-links">
                <?php if ( $rh_toll_free ) : ?>
                    <a href="tel:<?php echo esc_attr( $rh_toll_tel ); ?>" class="rh-utility-link" aria-label="Toll Free Number">
                        <svg class="nav-icon-phone" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path d="M12.8205 15.9999C12.1233 15.9999 11.1438 15.7477 9.67704 14.9284C7.89346 13.9284 6.5139 13.0052 4.73996 11.2362C3.02961 9.52728 2.1973 8.42084 1.03242 6.30153C-0.283565 3.90864 -0.0592336 2.65434 0.191532 2.11827C0.490164 1.47754 0.930969 1.09432 1.50073 0.713963C1.82435 0.501973 2.16682 0.32025 2.52379 0.171099C2.55952 0.155742 2.59274 0.141099 2.62239 0.127884C2.79921 0.0482406 3.06712 -0.0721179 3.40648 0.056455C3.63295 0.141456 3.83513 0.315387 4.15163 0.627891C4.80069 1.2679 5.68766 2.69327 6.01486 3.39328C6.23455 3.86507 6.37994 4.1765 6.3803 4.52579C6.3803 4.93473 6.17454 5.25009 5.92485 5.59045C5.87805 5.65438 5.83161 5.71545 5.7866 5.77474C5.51476 6.13189 5.45511 6.2351 5.4944 6.41939C5.57406 6.78975 6.16811 7.89226 7.14438 8.8662C8.12065 9.84015 9.19159 10.3966 9.56345 10.4759C9.75563 10.5169 9.86101 10.4548 10.2297 10.1734C10.2825 10.133 10.3368 10.0912 10.3936 10.0494C10.7744 9.76622 11.0752 9.56586 11.4746 9.56586H11.4767C11.8243 9.56586 12.1218 9.71657 12.6148 9.96515C13.2578 10.2894 14.7263 11.1648 15.3703 11.8145C15.6836 12.1302 15.8583 12.3316 15.9437 12.5577C16.0723 12.898 15.9512 13.1648 15.8722 13.3434C15.859 13.373 15.8444 13.4055 15.829 13.4416C15.6787 13.7979 15.4958 14.1396 15.2828 14.4623C14.9031 15.0302 14.5184 15.4699 13.8761 15.7688C13.5463 15.9248 13.1854 16.0038 12.8205 15.9999Z" fill="white"/>
</svg>
                        <?php echo esc_html( $rh_toll_free ); ?>
                    </a>
                <?php endif; ?>
                <?php if ( $rh_email ) : ?>
                    <a href="mailto:<?php echo esc_attr( $rh_email ); ?>" class="rh-utility-link" aria-label="Email Address">
                        <svg class="nav-icon-mail" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm-.4 4.25-7.07 4.42a1 1 0 0 1-1.06 0L4.4 8.25A1 1 0 1 1 5.46 6.55L12 10.64l6.54-4.09a1 1 0 1 1 1.06 1.7Z"/></svg>
                        <?php echo esc_html( $rh_email ); ?>
                    </a>
                <?php endif; ?>
                <?php if ( $rh_catalog ) : ?>
                    <a href="<?php echo esc_url( $rh_catalog['url'] ?? '#' ); ?>" class="rh-utility-link" target="<?php echo esc_attr( $rh_catalog['target'] ?? '_self' ); ?>">
                        <svg class="nav-icon-catalog" xmlns="http://www.w3.org/2000/svg" width="19" height="14" viewBox="0 0 19 14" fill="none">
  <path d="M0 13.2935V2.32761H1.0564V11.6376C1.05616 11.673 1.06519 11.7079 1.08259 11.7388C1.09999 11.7696 1.12515 11.7954 1.15559 11.8136C1.18602 11.8317 1.22067 11.8416 1.25609 11.8422C1.29152 11.8429 1.32649 11.8342 1.35755 11.8172C2.64053 11.2556 4.0376 11.0038 5.4359 11.0819C6.83829 11.1899 8.19532 11.6277 9.39645 12.3596C9.42772 12.3779 9.4633 12.3875 9.49953 12.3875C9.53575 12.3875 9.57133 12.3779 9.6026 12.3596C10.8037 11.6277 12.1608 11.1899 13.5632 11.0819C14.9677 11.0042 16.3708 11.2587 17.6586 11.8248C17.7084 11.8456 17.7644 11.846 17.8144 11.8257C17.8644 11.8054 17.9044 11.7661 17.9255 11.7165C17.9362 11.6915 17.942 11.6647 17.9426 11.6376V2.32761H19V13.2935H0ZM9.70425 1.55716C10.8014 0.672285 12.1364 0.132731 13.5403 0.0067585C14.9418 -0.0533195 16.3298 0.30161 17.5303 1.02706V11.3384C16.2632 10.8247 14.8978 10.5991 13.5328 10.6781C12.1858 10.7789 10.8775 11.1746 9.70045 11.8371L9.70425 1.55716ZM5.46345 10.6772C4.09843 10.6003 2.73337 10.8274 1.4668 11.3422V1.02706C2.66799 0.30059 4.0572 -0.0543981 5.45965 0.0067585C6.86346 0.132457 8.19845 0.671677 9.29575 1.55621V11.8381C8.11885 11.1749 6.81053 10.7785 5.46345 10.6772Z" fill="white"/>
</svg>
                        <?php echo esc_html( $rh_catalog['title'] ?? 'Catalog' ); ?>
                    </a>
                <?php endif; ?>
                <button type="button" class="rh-utility-link rh-search-toggle" id="rh-search-toggle" aria-label="Open search" aria-expanded="false" aria-controls="rh-search-panel">
                   <svg class="nav-icon-search" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M9.5 16C7.68333 16 6.146 15.3707 4.888 14.112C3.63 12.8533 3.00067 11.316 3 9.5C2.99933 7.684 3.62867 6.14667 4.888 4.888C6.14733 3.62933 7.68467 3 9.5 3C11.3153 3 12.853 3.62933 14.113 4.888C15.373 6.14667 16.002 7.684 16 9.5C16 10.2333 15.8833 10.925 15.65 11.575C15.4167 12.225 15.1 12.8 14.7 13.3L20.3 18.9C20.4833 19.0833 20.575 19.3167 20.575 19.6C20.575 19.8833 20.4833 20.1167 20.3 20.3C20.1167 20.4833 19.8833 20.575 19.6 20.575C19.3167 20.575 19.0833 20.4833 18.9 20.3L13.3 14.7C12.8 15.1 12.225 15.4167 11.575 15.65C10.925 15.8833 10.2333 16 9.5 16ZM9.5 14C10.75 14 11.8127 13.5627 12.688 12.688C13.5633 11.8133 14.0007 10.7507 14 9.5C13.9993 8.24933 13.562 7.187 12.688 6.313C11.814 5.439 10.7513 5.00133 9.5 5C8.24867 4.99867 7.18633 5.43633 6.313 6.313C5.43967 7.18967 5.002 8.252 5 9.5C4.998 10.748 5.43567 11.8107 6.313 12.688C7.19033 13.5653 8.25267 14.0027 9.5 14Z" fill="white"/>
</svg>
                    Search
                </button>
            </div>
        </div>

        <!-- Search overlay: slides down from the header, submits to the product catalog -->
        <div class="rh-search-panel" id="rh-search-panel" role="search" aria-hidden="true">
            <form class="rh-search-form" action="https://catalog.energymachinery.com/keyword/" method="get" target="_blank" rel="noopener">
                <input type="hidden" name="keycateg" value="100">
                <svg class="rh-search-form-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="m20 20-4.3-4.3"/></svg>
                <input type="search" name="key" class="rh-search-input" id="rh-search-input" placeholder="Search products &amp; parts&hellip;" aria-label="Search products and parts" autocomplete="off">
                <button type="submit" class="rh-search-submit">Search</button>
                <button type="button" class="rh-search-close" id="rh-search-close" aria-label="Close search">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 6L6 18M6 6l12 12"/></svg>
                </button>
            </form>
        </div>
    </div>

    <div class="rh-inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="rh-logo" aria-label="<?php bloginfo( 'name' ); ?>">
            <?php if ( ! empty( $rh_logo ) ) : ?>
                <img class="rh-logo-default" src="<?php echo esc_url( $rh_logo['url'] ); ?>" alt="<?php echo esc_attr( $rh_logo['alt'] ); ?>" width="<?php echo esc_attr( $rh_logo['width'] ); ?>" height="<?php echo esc_attr( $rh_logo['height'] ); ?>">
            <?php endif; ?>
            <!-- Shown only when the header is scrolled (see .rh-header.is-scrolled) -->
            <img class="rh-logo-scroll" src="<?php echo esc_url( get_template_directory_uri() . '/logo-scroll.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>" width="180" height="46">
        </a>

        <nav class="rh-nav" aria-label="Primary Navigation">
            <?php wp_nav_menu( array(
                'menu'       => 'Gdd Primary Nav',
                'container'  => false,
                'menu_class' => 'sn-level-1',
                'walker'     => new themeslug_walker_nav_menu,
            ) ); ?>
        </nav>

        <div class="rh-actions">
            <?php if ( $rh_contact ) : ?>
                <a href="<?php echo esc_url( $rh_contact_url ); ?>" class="rh-cta" target="<?php echo esc_attr( $rh_contact_target ); ?>">
                    <?php echo esc_html( $rh_contact_title ); ?>
                    <svg viewBox="0 0 7 12" fill="none" aria-hidden="true"><path d="M1 11L6 6L1 1" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            <?php endif; ?>

            <?php if ( $rh_rfq ) : ?>
                <a href="<?php echo esc_url( $rh_rfq_url ); ?>" class="rh-cta rh-cta--primary" target="<?php echo esc_attr( $rh_rfq_target ); ?>">
                    <?php echo esc_html( $rh_rfq_title ); ?>
                    <svg viewBox="0 0 7 12" fill="none" aria-hidden="true"><path d="M1 11L6 6L1 1" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            <?php endif; ?>

            <button class="rh-hamburger" id="rh-hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="rh-mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<div class="rh-mobile-menu" id="rh-mobile-menu" role="dialog" aria-modal="true" aria-label="Mobile Navigation">
    <button class="rh-mobile-close" id="rh-mobile-close" aria-label="Close menu">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M18 6L6 18M6 6l12 12"/>
        </svg>
    </button>

    <!-- Product catalog search inside the mobile menu -->
    <form class="rh-mobile-search" action="https://catalog.energymachinery.com/keyword/" method="get" target="_blank" rel="noopener" role="search">
        <input type="hidden" name="keycateg" value="100">
        <svg class="rh-mobile-search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="m20 20-4.3-4.3"/></svg>
        <input type="search" name="key" class="rh-mobile-search-input" placeholder="Search products &amp; parts&hellip;" aria-label="Search products and parts" autocomplete="off">
        <button type="submit" class="rh-mobile-search-submit" aria-label="Search">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </button>
    </form>

    <?php wp_nav_menu( array(
        'menu'       => 'Gdd Primary Nav',
        'container'  => false,
        'menu_class' => 'sn-level-1',
        'walker'     => new themeslug_walker_nav_menu,
    ) ); ?>

    <div class="rh-mobile-contact">
        <?php if ( $rh_toll_free ) : ?>
            <a href="tel:<?php echo esc_attr( $rh_toll_tel ); ?>"><?php echo esc_html( $rh_toll_free ); ?></a>
        <?php endif; ?>
        <?php if ( $rh_email ) : ?>
            <a href="mailto:<?php echo esc_attr( $rh_email ); ?>"><?php echo esc_html( $rh_email ); ?></a>
        <?php endif; ?>
        <?php if ( $rh_contact ) : ?>
            <a href="<?php echo esc_url( $rh_contact_url ); ?>" class="rh-cta">
                <?php echo esc_html( $rh_contact_title ); ?>
            </a>
        <?php endif; ?>
        <?php if ( $rh_rfq ) : ?>
            <a href="<?php echo esc_url( $rh_rfq_url ); ?>" class="rh-cta rh-cta--primary">
                <?php echo esc_html( $rh_rfq_title ); ?>
            </a>
        <?php endif; ?>
    </div>
</div>
