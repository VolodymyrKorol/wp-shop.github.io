<?php


add_action('wp_enqueue_scripts','styleConnect');
add_action('wp_footer','footerScriptsConnect');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('widget_init', 'theme_register_sidebar');


function styleConnect() {
wp_enqueue_style('wp-shop-normalize',get_template_directory_uri()."/assets/css/normalize.css");
wp_enqueue_style('wp-shop-style',get_stylesheet_uri());
}

function footerScriptsConnect(){
    wp_enqueue_scripts('wp-shop-style',get_template_directory_uri() . "");
}

function theme_register_nav_menu(){
    register_nav_menu('primary',"Header menu");
}

