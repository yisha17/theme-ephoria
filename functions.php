<?php


function ephoria_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support( 'automatic-feed-links');
}

add_action('after_setup_theme','ephoria_theme_support')

=======
load_theme_textdomain('themename', get_template_directory() . '/languages');


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
add_action('wp_enqueue_scripts','ephoria_register_scripts');

function  ephoria_widget_areas(){
    register_sidebar( 
        array(
           'before_title' => '', 
           'after_title' => '', 
           'before_widget' => '', 
           'after_widget' => '',
           'name' => 'Footer 1',
           'id' => 'footer_1',
           'description'=> 'Footer Widget Area'

        )
    );

     register_sidebar( 
        array(
           'before_title' => '', 
           'after_title' => '', 
           'before_widget' => '<h6 class="text-white">', 
           'after_widget' => '</h6>',
           'name' => 'Logo Title',
           'id' => 'logo_title',
           'description'=> 'Footer Widget Area'

        )
    );

    register_sidebar( 
        array(
           'before_title' => '', 
           'after_title' => '', 
           'before_widget' => '<ul class="list-unstyled">', 
           'after_widget' => '</ul>',
           'name' => 'Footer 2',
           'id' => 'footer_2',
           'description'=> 'Footer Widget Area'

        )
    );

    register_sidebar( 
        array(
           'before_title' => '', 
           'after_title' => '', 
           'before_widget' => '', 
           'after_widget' => '',
           'name' => 'Footer 3',
           'id' => 'footer_3',
           'description'=> 'Footer Widget Area'

        )
    );


     register_sidebar( 
        array(
           'before_title' => '', 
           'after_title' => '', 
           'before_widget' => '', 
           'after_widget' => '',
           'name' => 'Copy Right',
           'id' => 'copy_right',
           'description'=> 'Footer Widget Area'

        )
    );

     register_sidebar( 
        array(
           'before_title' => '', 
           'after_title' => '', 
           'before_widget' => '', 
           'after_widget' => '',
           'name' => 'Author',
           'id' => 'author',
           'description'=> 'Footer Widget Area'

        )
    );


}



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

# this four functions count view of a post

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

# this function show latest post

// function latest_post() {

//     $args = array(
//         'posts_per_page' => 3, /* how many post you need to display */
//         'offset' => 0,
//         'orderby' => 'post_date',
//         'order' => 'DESC',
//         'post_type' => 'post', /* your post type name */
//         'post_status' => 'publish'
//     );
//     $query = new WP_Query($args);
//     if ($query->have_posts()) :
//         while ($query->have_posts()) : $query->the_post();
//             ?>
<!-- //                 <a href="<?php the_permalink(); ?>">
//                     <div class="item d-flex align-items-center">
//                         <div class="image"> -->
//                            <?php
//                            if(has_post_thumbnail()){
//                                 the_post_thumbnail('thumbnail');
//                            }else{
//                                $get_author_id = get_the_author_meta('ID');
//                                 $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
//                                 echo '<img src="'.$get_author_gravatar.'" alt="'.get_the_title().'" />';
//                            }
                                
//                             ?>
                            
<!-- //                         </div>
//                         <div class="title"><strong><?php #the_title(); ?></strong>
//                         <div class="d-flex align-items-center">
//                             <div class="views"><i class="icon-eye"></i> <?php# echo gt_get_post_view();?></div>
//                             <div class="comments"><i class="icon-comment"></i><?php #comments_number(); ?></div>
//                         </div>
//                         </div>
//                     </div>
//                 </a> -->
//             <?php
//         endwhile;
//     endif;
// }

// add_shortcode('lastest-post', 'latest_post');


# to get the title and link of privious and next posts
function echo_next_previous_post_link($fmg_name="link" ,$selector="next"){  

if ($selector=="next") {
    $next_post_obj  = get_adjacent_post( '', '', false );
    $next_post_ID   = isset( $next_post_obj->ID ) ? $next_post_obj->ID : '';
    $next_post_link     = get_permalink( $next_post_ID );
    $next_post_title = get_the_title($next_post_ID);
    if ($fmg_name=="link") {
        echo $next_post_link ;
    }
    else {
        echo $next_post_title ;
    }
}
else {
    $previous_post_obj  = get_adjacent_post( '', '', true );
    $previous_post_ID   = isset( $previous_post_obj->ID ) ? $previous_post_obj->ID : '';
    $previous_post_link     = get_permalink( $previous_post_ID );
    $previous_post_title = get_the_title($previous_post_ID);
    if ($fmg_name=="link") {
        echo $previous_post_link ;
    }
    else {
        echo $previous_post_title ;
    }
}

}

#Move Comment Text Field to Bottom
function wpb_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
  
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom'); 

#Remove Website (URL) Field from WordPress Comment Form
function wpbeginner_remove_comment_url($arg) {
    $arg['url'] = '';
    return $arg;
}
add_filter('comment_form_default_fields', 'wpbeginner_remove_comment_url');

/* Function which displays your post date in time ago format */
function meks_time_ago() {
	return human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.( 'ago' );
}


function page_pagination() {

global $wp_query;

if ( $wp_query->max_num_pages <= 1 ) return; 

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<div class="pagination-wrap"><ul class="pagination">';
        foreach ( $pages as $page ) {
                echo "<li>$page</li>";
        }
       echo '</ul></div>';
        }
}


?>




