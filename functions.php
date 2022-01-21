<?php


function ephoria_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support( 'automatic-feed-links');
}

add_action('after_setup_theme','ephoria_theme_support');


function ephoria_menus(){
    $location = array(
        'primary' => 'Desktop main navigation',
        'footer' => 'Footer Navigation'
    );

    register_nav_menus($location);
}

add_action('init','ephoria_menus');
add_action('widgets_init','ephoria_widget_areas');
function ephoria_register_styles(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('ephoria-bootstrap', get_template_directory_uri()."/assets/vendor/bootstrap/css/bootstrap.min.css",array(), $version,'all');
    wp_enqueue_style('ephoria-fontawsome',get_template_directory_uri()."/assets/vendor/font-awesome/css/font-awesome.min.css",array(),$version,'all');
    wp_enqueue_style('ephoria-fontastic',get_template_directory_uri()."/assets/css/fontastic.css",array(),$version,'all');
    wp_enqueue_style('ephoria-opensans',"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700",array(),$version,'all');
    wp_enqueue_style('ephoria-jquery',get_template_directory_uri()."/assets/vendor/@fancyapps/fancybox/jquery.fancybox.min.css", array(),$version,'all');
    wp_enqueue_style('ephoria-default',get_template_directory_uri()."/assets/css/style.default.css",array('ephoria-bootstrap'),$version,'all');
    wp_enqueue_style('ephoria-custom',get_template_directory_uri()."/assets/css/custom.css",array(),$version,'all');
    
}

add_action('wp_enqueue_scripts','ephoria_register_styles');

function ephoria_register_scripts(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script('ephoria-query',get_template_directory_uri()."/assets/vendor/jquery/jquery.min.js",array(),$version,true);
    wp_enqueue_script('ephoria-popper',get_template_directory_uri()."/assets/vendor/bootstrap/js/bootstrap.min.js",array(),$version,true);
    wp_enqueue_script('ephoria-cookie',get_template_directory_uri()."/assets/vendor/jquery.cookie/jquery.cookie.js",array(),$version,true);
    wp_enqueue_script('ephoria-fancy',get_template_directory_uri()."/assets/vendor/@fancyapps/fancybox/jquery.fancybox.min.js",array(),$version,true);
    wp_enqueue_script('ephoria-main', get_template_directory_uri()."/assets/js/front.js",array(),'1.0',true);
}



?>




