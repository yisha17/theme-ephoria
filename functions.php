<?php


function ephoria_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
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
add_action('wp_enqueue_scripts','ephoria_register_scripts');


// require get_template_directory()."/inc/walker.php";

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

function add_class_the_tags($html){
    $postid = get_the_ID();
    $html = str_replace('<a','<a class="tag"',$html);
    return $html;
}
add_filter('the_tags','add_class_the_tags',10,1);


function gt_get_post_view() {

    $count = get_post_meta( get_the_ID(), 'post_views_count', true );

    return "$count";

}


function gt_set_post_view() {

    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );

}


function gt_posts_column_views( $columns ) {

    $columns['post_views'] = 'Views';

    return $columns;

}


function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }
}

add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );



?>

