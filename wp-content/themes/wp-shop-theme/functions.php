<?php


add_action('wp_enqueue_scripts','styleConnect');
add_action('wp_footer','footerScriptsConnect');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('widgets_init', 'theme_register_sidebar');


function styleConnect() {
wp_enqueue_style('wp-shop-normalize',get_template_directory_uri()."/assets/css/normalize.css");
wp_enqueue_style('wp-shop-style',get_stylesheet_uri());
}
function theme_register_sidebar(){
    register_sidebar( array(
        'name'          => 'Top sidebar',
        'id'            => "top_sidebar",
        'description'   => 'Top sidebar categories',
        'class'         => '',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => "</h4>\n",
    ) );
}

function footerScriptsConnect(){
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('wp-shop-checkbox', get_template_directory_uri() . "/assets/js/checkbox.js");
}

function theme_register_nav_menu(){
    register_nav_menu('primary',"Header menu");
}

