<?php

$fr_logo      = get_field( 'global_company_footer_logo', 'option' );
$fr_email     = get_field( 'global_email', 'option' );
$fr_phone     = get_field( 'global_phone_number', 'option' );
$fr_toll_free = get_field( 'global_toll_free', 'option' );
$fr_addr_one  = get_field( 'global_address_one', 'option' );
$fr_addr_two  = get_field( 'global_address_two', 'option' );
$fr_phone_tel = preg_replace( '/[^0-9]/', '', (string) $fr_phone );
$fr_toll_tel  = preg_replace( '/[^0-9]/', '', (string) $fr_toll_free );

$fr_tagline    = "New England's Compressed Air Specialists since 1971";
$fr_linkedin   = "https://www.linkedin.com/company/energy-machinery-inc/";
$fr_link_columns = array(
  array(
    'title' => 'Products',
    'links' => array(
      array( 'label' => 'Air Compressors', 'url' => '/products/industrial-air-compressors/' ),
      array( 'label' => 'Air Dryers', 'url' => '/compressed-air-desiccant-dryers/' ),
      array( 'label' => 'Used Machinery', 'url' => 'https://catalog.energymachinery.com/category/used-and-rebuilt-equipment?__hstc=251908822.f236ca2f908509902ae40312fdfd2214.1783598784319.1788292760278.1788300405314.3&__hssc=251908822.3.1788300405314&__hsfp=7d3a7b45118fa8f4d9e22e4a0f6117b0' ),
      array( 'label' => 'Air Treatment Filters & Accessories', 'url' => 'https://catalog.energymachinery.com/category/air-treatment-filters-accessories?__hstc=251908822.f236ca2f908509902ae40312fdfd2214.1783598784319.1788292760278.1788300405314.3&__hssc=251908822.3.1788300405314&__hsfp=7d3a7b45118fa8f4d9e22e4a0f6117b0' ),
      array( 'label' => 'Lubricants & Repair Parts', 'url' => 'https://catalog.energymachinery.com/category/lubricants-repair-parts?__hstc=251908822.f236ca2f908509902ae40312fdfd2214.1783598784319.1788292760278.1788300405314.3&__hssc=251908822.3.1788300405314&__hsfp=7d3a7b45118fa8f4d9e22e4a0f6117b0' ),
      array( 'label' => 'Custom Products', 'url' => '' ),
      array( 'label' => 'Oil/Water Separators', 'url' => '/products/air-compressor-oil-water-separators/' ),
    ),
  ),
  array(
    'title' => 'Services',
    'links' => array(
      array( 'label' => 'Parts Department', 'url' => '/parts/' ),
      array( 'label' => 'Service Department', 'url' => '/services/' ),
      array( 'label' => 'Rentals', 'url' => '/rental-machinery/' ),
      array( 'label' => 'Chicago Pneumatic Parts', 'url' => '/chicago/' ),
      array( 'label' => 'Energy Audits & Analysis', 'url' => '/energy-conservation/' ),
    ),
  ),
  array(
    'title' => 'Resources',
    'links' => array(
      array( 'label' => 'Our Catalog', 'url' => 'https://catalog.energymachinery.com/category/all-categories?__hstc=251908822.f236ca2f908509902ae40312fdfd2214.1783598784319.1788292760278.1788300405314.3&__hssc=251908822.3.1788300405314&__hsfp=7d3a7b45118fa8f4d9e22e4a0f6117b0' ),
      array( 'label' => 'eBooks', 'url' => 'https://info.energymachinery.com/lp-oil-vs-oil-free-air-compressors?__hstc=251908822.f236ca2f908509902ae40312fdfd2214.1783598784319.1788292760278.1788300405314.3&__hssc=251908822.3.1788300405314&__hsfp=7d3a7b45118fa8f4d9e22e4a0f6117b0' ),
      array( 'label' => 'Energy Calculator', 'url' => '/compressed-air-energy-audit-calculator/' ),
      array( 'label' => 'Line Card', 'url' => '/line-card/' ),
      array( 'label' => 'Sitemap', 'url' => '/sitemap/' ),
    ),
  ),
  array(
    'title' => 'Company',
    'links' => array(
      array( 'label' => 'About Us', 'url' => '/about-us/' ),
      array( 'label' => 'Industries', 'url' => '/industries/' ),
      array( 'label' => 'Blog', 'url' => '/blog/' ),
      array( 'label' => 'Contact Us', 'url' => '/contact/' ),
    ),
  ),
);

// Reusable icons (inherit color via currentColor)
$fr_ico_pin   = '<svg xmlns="http://www.w3.org/2000/svg" width="13" height="18" viewBox="0 0 13 18" fill="none">
  <path d="M6.3 8.55C5.70326 8.55 5.13097 8.31295 4.70901 7.89099C4.28705 7.46903 4.05 6.89674 4.05 6.3C4.05 5.70326 4.28705 5.13097 4.70901 4.70901C5.13097 4.28705 5.70326 4.05 6.3 4.05C6.89674 4.05 7.46903 4.28705 7.89099 4.70901C8.31295 5.13097 8.55 5.70326 8.55 6.3C8.55 6.59547 8.4918 6.88806 8.37873 7.16104C8.26566 7.43402 8.09992 7.68206 7.89099 7.89099C7.68206 8.09992 7.43402 8.26566 7.16104 8.37873C6.88806 8.4918 6.59547 8.55 6.3 8.55ZM6.3 0C4.62914 0 3.02671 0.663748 1.84523 1.84523C0.663748 3.02671 0 4.62914 0 6.3C0 11.025 6.3 18 6.3 18C6.3 18 12.6 11.025 12.6 6.3C12.6 4.62914 11.9363 3.02671 10.7548 1.84523C9.57329 0.663748 7.97086 0 6.3 0Z" fill="#9498A2"/>
</svg>';
$fr_ico_phone = '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
  <path d="M14.4231 17.9998C13.6387 17.9998 12.5367 17.7162 10.8867 16.7945C8.88015 15.6695 7.32813 14.6308 5.33246 12.6408C3.40831 10.7182 2.47196 9.47345 1.16147 7.08922C-0.319011 4.39722 -0.0666378 2.98614 0.215473 2.38305C0.551435 1.66224 1.04734 1.23112 1.68832 0.803208C2.05239 0.56472 2.43767 0.360281 2.83927 0.192487C2.87946 0.17521 2.91683 0.158736 2.95018 0.14387C3.14911 0.0542707 3.45051 -0.0811327 3.83228 0.0635119C4.08707 0.159138 4.31453 0.35481 4.67058 0.706377C5.40077 1.42639 6.39861 3.02993 6.76672 3.81744C7.01387 4.34821 7.17743 4.69857 7.17783 5.09152C7.17783 5.55157 6.94636 5.90635 6.66545 6.28926C6.61281 6.36118 6.56056 6.42988 6.50993 6.49658C6.20411 6.89837 6.137 7.01449 6.1812 7.22181C6.27082 7.63847 6.93912 8.8788 8.03743 9.97448C9.13573 11.0702 10.3405 11.6962 10.7589 11.7853C10.9751 11.8316 11.0936 11.7616 11.5084 11.445C11.5678 11.3996 11.6289 11.3526 11.6928 11.3056C12.1212 10.987 12.4596 10.7616 12.9089 10.7616H12.9113C13.3023 10.7616 13.6371 10.9311 14.1916 11.2108C14.915 11.5756 16.5671 12.5604 17.2916 13.2913C17.6441 13.6464 17.8406 13.8731 17.9366 14.1274C18.0813 14.5103 17.9451 14.8104 17.8563 15.0113C17.8414 15.0447 17.8249 15.0812 17.8076 15.1218C17.6385 15.5226 17.4328 15.907 17.1932 16.2701C16.766 16.909 16.3332 17.4036 15.6106 17.7399C15.2396 17.9154 14.8335 18.0043 14.4231 17.9998Z" fill="#9498A2"/>
</svg>';
$fr_ico_mail  = '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15" fill="none">
  <path d="M16.2 0H1.8C0.81 0 0.00899999 0.81 0.00899999 1.8L0 12.6C0 13.59 0.81 14.4 1.8 14.4H16.2C17.19 14.4 18 13.59 18 12.6V1.8C18 0.81 17.19 0 16.2 0ZM15.84 3.825L9.477 7.803C9.189 7.983 8.811 7.983 8.523 7.803L2.16 3.825C2.06975 3.77434 1.99073 3.7059 1.9277 3.62381C1.86467 3.54172 1.81896 3.4477 1.79332 3.34743C1.76768 3.24717 1.76265 3.14274 1.77854 3.04048C1.79443 2.93821 1.8309 2.84023 1.88575 2.75247C1.9406 2.66471 2.01269 2.58899 2.09765 2.5299C2.18262 2.4708 2.27868 2.42956 2.38005 2.40867C2.48141 2.38778 2.58595 2.38767 2.68736 2.40835C2.78876 2.42904 2.88492 2.47008 2.97 2.529L9 6.3L15.03 2.529C15.1151 2.47008 15.2112 2.42904 15.3126 2.40835C15.414 2.38767 15.5186 2.38778 15.62 2.40867C15.7213 2.42956 15.8174 2.4708 15.9023 2.5299C15.9873 2.58899 16.0594 2.66471 16.1142 2.75247C16.1691 2.84023 16.2056 2.93821 16.2215 3.04048C16.2373 3.14274 16.2323 3.24717 16.2067 3.34743C16.181 3.4477 16.1353 3.54172 16.0723 3.62381C16.0093 3.7059 15.9302 3.77434 15.84 3.825Z" fill="#9498A2"/>
</svg>';
?>
<footer class="footer-redesign" role="contentinfo">
  <div class="fr-inner">
    <div class="fr-top">
      <div class="fr-brand">
        <?php if ( ! empty( $fr_logo ) ) : ?>
          <a class="fr-logo" href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>">
            <img src="<?php echo esc_url( $fr_logo['url'] ); ?>" alt="<?php echo esc_attr( $fr_logo['alt'] ); ?>">
          </a>
        <?php endif; ?>

        <?php if ( $fr_tagline ) : ?>
          <p class="fr-tagline"><?php echo esc_html( $fr_tagline ); ?></p>
        <?php endif; ?>

        <ul class="fr-contact">
          <?php if ( $fr_addr_one || $fr_addr_two ) : ?>
            <li class="fr-contact-item">
              <span class="fr-ico"><?php echo $fr_ico_pin; ?></span>
              <span><?php echo esc_html( $fr_addr_one ); ?><?php if ( $fr_addr_two ) : ?><br><?php echo esc_html( $fr_addr_two ); ?><?php endif; ?></span>
            </li>
          <?php endif; ?>
          <?php if ( $fr_toll_free ) : ?>
            <li class="fr-contact-item">
              <span class="fr-ico"><?php echo $fr_ico_phone; ?></span>
              <a href="tel:<?php echo esc_attr( $fr_toll_tel ); ?>" aria-label="Toll Free Number"><?php echo esc_html( $fr_toll_free ); ?></a>
            </li>
          <?php endif; ?>
          <?php if ( $fr_phone ) : ?>
            <li class="fr-contact-item">
              <span class="fr-ico"><?php echo $fr_ico_phone; ?></span>
              <a href="tel:<?php echo esc_attr( $fr_phone_tel ); ?>" aria-label="Phone Number"><?php echo esc_html( $fr_phone ); ?></a>
            </li>
          <?php endif; ?>
          <?php if ( $fr_email ) : ?>
            <li class="fr-contact-item fr-contact-mail">
              <span class="fr-ico"><?php echo $fr_ico_mail; ?></span>
              <a href="mailto:<?php echo esc_attr( $fr_email ); ?>" target="_blank"><?php echo esc_html( $fr_email ); ?></a>
            </li>
          <?php endif; ?>
        </ul>
      </div>

      <div class="fr-links">
        <?php foreach ( $fr_link_columns as $fr_col ) : ?>
          <div class="fr-col">
            <p class="fr-col-title"><?php echo esc_html( $fr_col['title'] ); ?></p>
            <ul class="fr-col-list">
              <?php foreach ( $fr_col['links'] as $fr_link ) : ?>
                <li><a href="<?php echo esc_url( $fr_link['url'] ); ?>"><?php echo esc_html( $fr_link['label'] ); ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <hr class="fr-divider">

    <div class="fr-bottom">
      <p class="fr-copy">&copy; <?php echo date( 'Y' ); ?> <a href="<?php bloginfo( 'url' ); ?>">Energy Machinery, Inc</a>. All Rights Reserved | Website Created by <a href="https://business.thomasnet.com/industrial-marketing-services" target="_blank" rel="nofollow" title="Thomas Web Solutions">Thomas Marketing Services</a></p>
      <div class="fr-bottom-right">
        <a class="fr-legal" href="/privacy-policy/" rel="nofollow" title="Privacy Policy">Privacy Policy</a>
        <a class="fr-legal" href="/terms-of-service/" rel="nofollow" title="Terms of Service">Terms of Service</a>
        <a class="fr-social" href="<?php echo esc_url( $fr_linkedin ); ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14ZM8.34 18.34V9.94H5.56v8.4h2.78ZM6.95 8.7a1.61 1.61 0 1 0 0-3.22 1.61 1.61 0 0 0 0 3.22Zm11.39 9.64v-4.6c0-2.46-1.31-3.6-3.06-3.6a2.64 2.64 0 0 0-2.39 1.32h-.04v-1.12H10.1v8.4h2.78v-4.16c0-1.1.2-2.16 1.56-2.16 1.34 0 1.36 1.25 1.36 2.23v4.09h2.78Z"/></svg>
        </a>
      </div>
    </div>
  </div>
</footer>

<script>
(function () {
    'use strict';
    var footer = document.querySelector('.footer-redesign');
    if (!footer) return;

    var MOBILE_QUERY = '(max-width: 47.9375em)';

    footer.querySelectorAll('.fr-col').forEach(function (col) {
        var title = col.querySelector('.fr-col-title');
        if (!title) return;

        title.setAttribute('role', 'button');
        title.setAttribute('tabindex', '0');

        function toggle() {
            if (!window.matchMedia(MOBILE_QUERY).matches) return; // desktop: no-op
            col.classList.toggle('is-open');
            title.setAttribute('aria-expanded', col.classList.contains('is-open') ? 'true' : 'false');
        }

        title.addEventListener('click', toggle);
        title.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                toggle();
            }
        });
    });

    window.matchMedia(MOBILE_QUERY).addEventListener('change', function (e) {
        if (!e.matches) {
            footer.querySelectorAll('.fr-col.is-open').forEach(function (col) {
                col.classList.remove('is-open');
                var t = col.querySelector('.fr-col-title');
                if (t) t.setAttribute('aria-expanded', 'false');
            });
        }
    });
}());
</script>

<a href="#" id="back-to-top" title="Back to top" class="show"><span>^</span></a>

<script>
(function () {
    'use strict';

    var header = document.getElementById('rh-header');
    if (!header) return;

    var SCROLL_THRESHOLD = 60; 

    function onScroll() {
        if (window.scrollY > SCROLL_THRESHOLD) {
            header.classList.add('is-scrolled');
        } else {
            header.classList.remove('is-scrolled');
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll(); 

    var hamburger   = document.getElementById('rh-hamburger');
    var mobileMenu  = document.getElementById('rh-mobile-menu');
    var closeBtn    = document.getElementById('rh-mobile-close');

    function openMenu() {
        mobileMenu.classList.add('is-open');
        hamburger.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        mobileMenu.classList.remove('is-open');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    }

    if (hamburger && mobileMenu && closeBtn) {
        hamburger.addEventListener('click', openMenu);
        closeBtn.addEventListener('click', closeMenu);

        mobileMenu.addEventListener('click', function (e) {
            if (e.target === mobileMenu) {
                closeMenu();
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && mobileMenu.classList.contains('is-open')) {
                closeMenu();
                hamburger.focus();
            }
        });

        var ARROW_SVG = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>';

        var parentItems = mobileMenu.querySelectorAll('.sn-level-1 > li.menu-item-has-children');
        Array.prototype.forEach.call(parentItems, function (li) {
            
            var link = null;
            for (var i = 0; i < li.children.length; i++) {
                if (li.children[i].tagName === 'A') { link = li.children[i]; break; }
            }

            var toggle = document.createElement('button');
            toggle.type = 'button';
            toggle.className = 'rh-acc-toggle';
            toggle.setAttribute('aria-expanded', 'false');
            toggle.setAttribute('aria-label', 'Toggle submenu');
            toggle.innerHTML = ARROW_SVG;
            li.appendChild(toggle);

            function toggleItem() {
                var wasOpen = li.classList.contains('rh-open');

                // Close all other submenus first
                Array.prototype.forEach.call(parentItems, function (item) {
                    if (item !== li) {
                        item.classList.remove('rh-open');
                        var btn = item.querySelector('.rh-acc-toggle');
                        if (btn) btn.setAttribute('aria-expanded', 'false');
                    }
                });

                // Toggle the clicked submenu
                if (wasOpen) {
                    li.classList.remove('rh-open');
                    toggle.setAttribute('aria-expanded', 'false');
                } else {
                    li.classList.add('rh-open');
                    toggle.setAttribute('aria-expanded', 'true');
                }
            }

            toggle.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                toggleItem();
            });

            if (link) {
                var href = link.getAttribute('href') || '';
                if (href === '' || href === '#' || href === 'javascript:void(0)') {
                    link.addEventListener('click', function (e) {
                        e.preventDefault();
                        toggleItem();
                    });
                }
            }
        });
    }

    var searchToggle = document.getElementById('rh-search-toggle');
    var searchPanel  = document.getElementById('rh-search-panel');
    var searchClose  = document.getElementById('rh-search-close');
    var searchInput  = document.getElementById('rh-search-input');

    function openSearch() {
        searchPanel.classList.add('is-open');
        searchToggle.setAttribute('aria-expanded', 'true');
        searchPanel.setAttribute('aria-hidden', 'false');
        
        window.setTimeout(function () { if (searchInput) searchInput.focus(); }, 80);
    }

    function closeSearch() {
        searchPanel.classList.remove('is-open');
        searchToggle.setAttribute('aria-expanded', 'false');
        searchPanel.setAttribute('aria-hidden', 'true');
    }

    if (searchToggle && searchPanel) {
        searchToggle.addEventListener('click', function () {
            if (searchPanel.classList.contains('is-open')) {
                closeSearch();
            } else {
                openSearch();
            }
        });

        if (searchClose) {
            searchClose.addEventListener('click', function () {
                closeSearch();
                searchToggle.focus();
            });
        }

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && searchPanel.classList.contains('is-open')) {
                closeSearch();
                searchToggle.focus();
            }
        });

        document.addEventListener('click', function (e) {
            if (!searchPanel.classList.contains('is-open')) return;
            if (header.contains(e.target)) return; 
            closeSearch();
        });

        var searchForm = searchPanel.querySelector('.rh-search-form');
        if (searchForm) {
            searchForm.addEventListener('submit', function (e) {
                if (!searchInput.value.trim()) {
                    e.preventDefault();
                    searchInput.focus();
                }
            });
        }
    }
}());
</script>
             