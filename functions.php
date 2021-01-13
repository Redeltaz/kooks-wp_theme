<?php
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menu');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
});

function style_theme()
{
    wp_enqueue_style( 'header', get_template_directory_uri() . '/css/navbar.css',false,'1.1','all');
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css',false,'1.1','all');
    wp_enqueue_style( 'global', get_template_directory_uri() . 'style.css',false,'1.1','all');
}

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

function kookstheme_title($title)
{
    return 'test' . $title;
};

function kookstheme_menu_class($classes)
{
    $classes[] = 'navItem';
    return $classes;
}

add_action('wp_enqueue_scripts', 'style_theme');
add_filter('wp_title', 'kookstheme_title');
add_filter('nav_menu_css_class', 'kookstheme_menu_class');
add_action('get_header', 'remove_admin_login_header');
