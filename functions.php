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
    
    $wp_customize->add_section('imran_header_area', array(
        'title' =>__('Header Area', 'wpitheme')
    ));

    $wp_customize->add_setting('imran_logo', array(
        'default' => get_bloginfo('template_directory') .'/img/logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imran_logo', array(
        'Label' => 'Logo upload',
        'setting' => 'imran_logo',
        'section' => 'imran_header_area',
    )));
}
add_action('customize_register','imran_customizer_register');
