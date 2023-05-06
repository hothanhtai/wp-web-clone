<?php 


function taiho_theme_support(){
    //add dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme', 'taiho_theme_support');

function taiho_menus(){
    $location = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($location);
}
add_action('init', 'taiho_menus');

function taiho_register_styles() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('taiho-style', get_template_directory_uri()."/style.css", array(), $version, 'all');
    wp_enqueue_style('taiho-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' , array(), '6.4.0' , 'all');
}

add_action('wp_enqueue_scripts', 'taiho_register_styles');

function taiho_register_scripts() {
  wp_enqueue_script('taiho-jquery', 'https://kit.fontawesome.com/8e7e8f54fc.js', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'taiho_register_scripts');
?>