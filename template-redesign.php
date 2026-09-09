<?php

	/*
		Template Name: Redesign Page
	*/

	// add_action( 'wp_enqueue_scripts', function() {
	// 	wp_enqueue_style( 'google-fonts-redesign', 'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;600;700&family=DM+Sans:wght@700&family=Stack+Sans+Text:wght@300;400;500;700&family=Stack+Sans+Headline:wght@400;700&display=swap', array(), null );
	// 	wp_enqueue_style( 'redesign-styles', get_stylesheet_directory_uri() . '/css/redesign-new.css', array('google-fonts-redesign'), '1.2.3' );
	// }, 15 );
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
       
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<section class="site-content redesign-page" role="main">
		<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/flexible-content' ) ); ?>
	</section>
<?php endwhile; ?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>

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