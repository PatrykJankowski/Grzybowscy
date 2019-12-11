<?php

add_filter( 'wp_enqueue_scripts', 'remove_shit', PHP_INT_MAX );
function remove_shit(){
    wp_dequeue_script( 'jquery');
    wp_deregister_script( 'jquery');
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'contact-form-7' );
}

add_action('init', function() {
    remove_action('rest_api_init', 'wp_oembed_register_route');
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    // Remove wp emoji
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
}, PHP_INT_MAX - 1 );






/*function add_google_fonts() {
    wp_enqueue_style('google_web_fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,500');
}
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );*/





add_action( 'after_setup_theme', 'grzybowscy_setup' );
function grzybowscy_setup() {
    load_theme_textdomain( 'grzybowski', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    global $content_width;
    if ( ! isset( $content_width ) ) $content_width = 640;
    register_nav_menu('nav-menu',__( 'Menu nawigacyjne' ));
}



function nav_menu_attributes_filter($var) {
    return is_array($var) ? array_intersect($var, array('current_page_item')) : '';
}
add_filter('nav_menu_css_class', 'nav_menu_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'nav_menu_attributes_filter', 100, 1);
add_filter('page_css_class', 'nav_menu_attributes_filter', 100, 1);








add_filter( 'the_title', 'grzybowscy_title' );
function grzybowscy_title( $title ) {
    if ( $title == '' ) {
        return '&rarr;';
    } else {
        return $title;
    }
}

add_filter( 'wp_title', 'grzybowscy_filter_wp_title' );
function grzybowscy_filter_wp_title( $title ) {
    return $title . esc_attr( get_bloginfo( 'name' ) );
}

add_action( 'widgets_init', 'widgets_init' );
function widgets_init() {
    register_sidebar(array(
        'id'            => 'about',
        'name'          => __('O firmie', 'grzybowski'),
        'description'   => 'Sekcja z krótkim opisem firmy na stronie głównej',
        'before_widget' => '',
        'after_widget'  => '',
    ));
}
