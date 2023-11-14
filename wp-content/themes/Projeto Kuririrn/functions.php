<?php
// session_start();
/* Debug */
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

load_theme_textdomain('mrcla', TEMPLATEPATH . '/languages');
$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if (is_readable($locale_file)) {
    require_once($locale_file);
}

date_default_timezone_set('America/Sao_Paulo');

ini_set('display_errors', 0);
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require_once TEMPLATEPATH . '/app/head-footer.php';
require_once TEMPLATEPATH . '/app/cookies.php';

add_image_size('thumbnail', 500, 620, true);
add_image_size('medium', 800, 600, true);
add_image_size('large', 1500, 500, true);

add_filter('use_block_editor_for_post', '__return_false', 10);


add_filter('json_enabled', '__return_false');
add_filter('json_jsonp_enabled', '__return_false');



function dd($q, $print_r = true) {
    echo '<pre>';
    $print_r ? print_r($q) : var_dump($q);
    echo '</pre>';
}


/*
 * Disable API
 */

function wp_snippet_disable_rest_api($access) {
    return new WP_Error('rest_disabled', __('The WordPress REST API has been disabled.'), array('status' => rest_authorization_required_code()));
}

//add_filter('rest_authentication_errors', 'wp_snippet_disable_rest_api');

/*
 * Disable API
 */
