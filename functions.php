<?php
 register_sidebar(array(
 'name' => __( 'Homepage Rotator' ),
 'id' => 'rotator-area',
 'description' => __( 'Homepage Rotator' ),
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '',
 'after_title' => '',
 ));

 register_sidebar(array(
 'name' => __( 'Homepage Showcase' ),
 'id' => 'showcase-area',
 'description' => __( 'Homepage Showcase ' ),                  
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '',
 'after_title' => '',
 ));
 
 register_sidebar(array(
 'name' => __( 'Footer Column Home Page' ),
 'id' => 'home-page-footer',
 'description' => __( 'Footer Column Home Page' ),                  
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));

 register_sidebar(array(
 'name' => __( 'Internal Image' ),
 'id' => 'internal-image',
 'description' => __( 'Internal Image' ),
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '',
 'after_title' => '',
 ));

 register_sidebar(array(
 'name' => __( 'Internal Sidebar' ),
 'id' => 'internal-sidebar-area',
 'description' => __( 'Internal Sidebar' ),                  
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h3 class="title">',
 'after_title' => '</h3>',
 ));
 
  register_sidebar(array(
 'name' => __( 'Page Sidebar' ),
 'id' => 'page-sidebar-area',
 'description' => __( 'Page Sidebar' ),                  
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h3 class="title">',
 'after_title' => '</h3>',
 ));
  
register_sidebar(array(
 'name' => __( 'Portfolio Sidebar' ),
 'id' => 'portfolio-sidebar-area',
 'description' => __( 'Portfolio Sidebar' ),                  
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h3 class="title">',
 'after_title' => '</h3>',
 ));

register_sidebar(array(
 'name' => __( 'News Sidebar' ),
 'id' => 'news-sidebar-area',
 'description' => __( 'News Sidebar' ),                  
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h3 class="title">',
 'after_title' => '</h3>',
 ));

register_sidebar(array(
 'name' => __( 'About Sidebar' ),
 'id' => 'about-sidebar-area',
 'description' => __( 'About Sidebar' ),                  
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h3 class="title">',
 'after_title' => '</h3>',
 ));

register_sidebar(array(
 'name' => __( 'Contact Sidebar' ),
 'id' => 'contact-sidebar-area',
 'description' => __( 'Contact Sidebar' ),                  
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h2 class="title">',
 'after_title' => '</h2>',
 ));

register_sidebar(array(
 'name' => __( 'whats new - front page' ),
 'id' => 'twitter-sidebar-area',
 'description' => __( 'Contact Sidebar' ),                  
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h3 class="title">',
 'after_title' => '</h3>',
 ));

 register_sidebar(array(
 'name' => __( 'Footer Text' ),
 'id' => 'footer',
 'description' => __( 'Footer Text' ),                  
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h4>',
 'after_title' => '</h4>',
 ));


function register_my_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'secondary-menu' => __( 'Mobile Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

wp_deregister_script('jquery');
wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"), false, '1.8.1');
wp_enqueue_script('jquery');
 
function add_markup_pages($output) {
    $output= preg_replace('/menu-item/', 'first-menu-item', $output, 1);
	$output=substr_replace($output, "last menu-item", strripos($output, "menu-item"), strlen("menu-item"));
    return $output;
}
add_filter('wp_nav_menu', 'add_markup_pages');

remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

// Add featured image support
// ======================================================= 
add_theme_support( 'post-thumbnails' ); 

// Change the [...] at the end of the excerpt
// ======================================================= 
function new_excerpt_more( $more ) {
    return ' <div class="excerpt"><span>...</span></div>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Change the length the excerpt
// ======================================================= 
function custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Variable & intelligent excerpt length.
// ======================================================= 
function print_excerpt($length) { // Max excerpt length. Length is set in characters
    global $post;
    $text = $post->post_excerpt;
    if ( '' == $text ) {
        $text = get_the_content('');
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
    }
    $text = strip_shortcodes($text); // optional, recommended
    $text = strip_tags($text); // use ' $text = strip_tags($text,'<p><a>'); ' if you want to keep some tags

    $text = substr($text,0,$length);
    $excerpt = reverse_strrchr($text, '.', 1);
    if( $excerpt ) {
        echo apply_filters('the_excerpt',$excerpt);
    } else {
        echo apply_filters('the_excerpt',$text);
    }
}
// Returns the portion of haystack which goes until the last occurrence of needle

function reverse_strrchr($haystack, $needle, $trail) {
    return strrpos($haystack, $needle) ? substr($haystack, 0, strrpos($haystack, $needle) + $trail) : false;
}

function remove_more_jump_link($link) { 
$offset = strpos($link, '#more-');
if ($offset) {
$end = strpos($link, '"',$offset);
}
if ($end) {
$link = substr_replace($link, '', $offset, $end-$offset);
}
return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');
?>