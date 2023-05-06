<?php 


function taiho_theme_support(){
    //add dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

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
}

add_action('wp_enqueue_scripts', 'taiho_register_styles');

// function taiho_register_scripts() {
//   wp_enqueue_script('taiho-jquery', get_template_directory_uri()."/assets/js/main.js", array(), '1.0', 'all');
// }

// add_action('wp_enqueue_scripts', 'taiho_register_scripts');
?>