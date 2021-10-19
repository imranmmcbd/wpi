<?php
// Site Title 
add_theme_support('title-tag');

// CSS & jS file calling

function imran_css_js_file_calling(){
    // CSS File
    wp_enqueue_style('imran_style', get_stylesheet_uri() );
    wp_register_style('bootstarp', get_template_directory_uri().'/css/bootstrap.css', array(), '5.1.3', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.1', 'all');
    wp_enqueue_style('bootstarp');
    wp_enqueue_style('custom');

    //JS File 

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.1.3', 'true');
    wp_register_script( 'main', get_template_directory_uri().'/js/main.js', array(), '1.0.1', 'all');
    wp_enqueue_script('main');

}
add_action('wp_enqueue_scripts', 'imran_css_js_file_calling');

//Theme Customize
function imran_customizer_register($wp_customize){
    $wp_customize->add_section('imran_header_are' array(
        'title' =>__('Header Area', 'wpitheme')
    ));
}
