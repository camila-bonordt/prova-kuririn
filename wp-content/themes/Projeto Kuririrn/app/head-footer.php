<?php

/* Import jQuery */
wp_enqueue_script('jquery');

add_action('wp_head', 'addAnalytics');

function addFavicon()
{
?>
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/icons/favicon.png" type="image/x-icon" />
<?php
}

add_action('login_head', 'addFavicon');
add_action('admin_head', 'addFavicon');
add_action('wp_head', 'addFavicon');

function addStyle()
{
?>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>?ver=2.1.0" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<?php
}

add_action('wp_head', 'addStyle');


function script_kuririn()
{
?>
    <script>
        jQuery(document).ready(function() {
            jQuery('.menu-wrapper').on('click', function() {
                if (jQuery('.menu-items').hasClass('d-none')) {
                    jQuery('.menu-items').removeClass('d-none')
                    jQuery('.menu-items').addClass('d-flex')
                    jQuery('.header-menu').addClass('change')
                } else {
                    jQuery('.header-menu').removeClass('change')
                    jQuery('.menu-items').removeClass('d-flex')
                    jQuery('.menu-items').addClass('d-none')
                }
            });
            jQuery('.menu-items a').on('click', function() {
                jQuery('.header-menu').removeClass('change')
                jQuery('.menu-items').removeClass('d-flex')
                jQuery('.menu-items').addClass('d-none')
            });
        });
    </script>
    <script>
        jQuery('.accordion__header').click(function(e) {
            e.preventDefault();
            var currentIsActive = jQuery(this).hasClass('is-active');
            jQuery(this).parent('.accordion').find('> *').removeClass('is-active');
            if (currentIsActive != 1) {
                jQuery(this).addClass('is-active');
                jQuery(this).next('.accordion__body').addClass('is-active');
            }
        });
    </script>
    <script>
        jQuery('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            document.styleSheets[0].addRule('.file:before', 'content: attr(data-before) !important;');
            jQuery('.file').attr('data-before', fileName);
        });
    </script>
<?php
}

add_action('wp_footer', 'script_kuririn');

add_action('wp_footer', 'addScript');
function aosLibCss()
{
?>
<?php
}
add_action('wp_head', 'aosLibCss');

function aosLibScript()
{
?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            disable: function() {
                var maxWidth = 800;
                return window.innerWidth < maxWidth;
            },
        });
    </script>
<?php
}
add_action('wp_footer', 'aosLibScript');
