<?php

/* Alterar Title do Admin */

function my_admin_title($admin_title, $title) {
    return get_bloginfo('name') . ' &bull; ' . $title;
}

add_filter('admin_title', 'my_admin_title', 10, 2);


/* Remover Versão Wordpres do Código-Fonte  */
remove_action('wp_head', 'wp_generator');


/* Tirar Versão Wordpress Painel Agora */

function admin_versao_agora() {
    if (!current_user_can('edit_users')) {
        echo '<style>.versions p, .versions span, .inside .main p {display: none !important;}</style>';
    }
}

add_action('admin_head', 'admin_versao_agora');


/* Alterar Texto do Footer Admin */

function left_admin_footer_text_output($text) {
    return __('Desenvolvido por') . ' <a href="http://www.oxigenweb.com.br" title="' . __('Otimização de Sites') . '" target="_blank">' . __('OxigenWeb') . '</a>';
}

add_filter('admin_footer_text', 'left_admin_footer_text_output');

function right_admin_footer_text_output($text) {
    return "";
}

add_filter('update_footer', 'right_admin_footer_text_output', 11);


/* Alterar Imagem, Title e Link do Login */

function login_logo() {
    echo '<link rel="icon" href="' . get_bloginfo('template_url') . '/images/favicon.png" type="image/x-icon" />';
    echo '<style type="text/css">';
    echo '     .login h1 a {';
    echo '         background-image: url("' . get_bloginfo('template_directory') . '/assets/images/logo-color.svg") !important;';
    echo '         background-size: 210px;';
    echo '         width: 300px;';
    echo '     }';
    echo '     .login.login-action-login {';
    echo '          background-color: #fff;';
    echo '     }';
    echo '     .login #backtoblog a, .login #nav a {';
    echo '          color: #fff;';
    echo '     }';
    echo '</style>';
}

add_action('login_head', 'login_logo');

function alt_login_url() {
    return get_bloginfo('url');
}

add_filter('login_headerurl', 'alt_login_url');

function alt_login_title() {
    return get_bloginfo('name');
}

add_filter('login_headertitle', 'alt_login_title');


/* Remover Itens da barra de Admin  */

function wps_admin_bar() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
    if (!current_user_can('edit_users')) {
        $wp_admin_bar->remove_menu('about');
        $wp_admin_bar->remove_menu('wporg');
        $wp_admin_bar->remove_menu('documentation');
        $wp_admin_bar->remove_menu('support-forums');
        $wp_admin_bar->remove_menu('feedback');
        $wp_admin_bar->remove_menu('view-site');
        $wp_admin_bar->remove_menu('comments');
        $wp_admin_bar->remove_menu('new-content');
        $wp_admin_bar->remove_menu('new-post');
        $wp_admin_bar->remove_menu('new-media');
        $wp_admin_bar->remove_menu('new-link');
        $wp_admin_bar->remove_menu('new-page');
        $wp_admin_bar->remove_menu('wpseo-menu');
    }
}

add_action('wp_before_admin_bar_render', 'wps_admin_bar');
