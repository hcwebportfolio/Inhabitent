<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );

// REMOVES EDITOR MENU IN CMS
//
// function inhabitent_remove_submenus() {
//     remove_submenu_page( 'themes.php', 'theme-editor.php' );
//     remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
// }
// add_action( 'admin_init', 'inhabitent_remove_submenus', 102 );

// CUSTOMIZING LOGIN PAGE

function inhabitent_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/customlogin.css" />';
}

add_action('login_head', 'inhabitent_custom_login');

function inhabitent_url( ) {
	return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_url' );


function inhabitent_header() {

		if ( !is_page_template("about.php") ) {
			return;
		}

    $background_image = CFS()->get('header_photo');
    $custom_css = "
            .about-header{
                    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
										url('$background_image') center center no-repeat;
										background-size: cover;
            }";
    wp_add_inline_style( 'inhabitent-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_header' );

function inhabitent_filter_product_query( $query ) {
	if ( (is_post_type_archive('product') || is_tax('product_type') ) && !is_admin() && $query->is_main_query() ) {
		$query->set( 'orderby', 'title' );
		 $query->set( 'order', 'ASC' );
		 $query->set( 'posts_per_page', 16 );
	 } }
add_action( 'pre_get_posts', 'inhabitent_filter_product_query' );

//Custom Function to Get Archive Title

function inhabitent_archive_title($title) {

    if (is_post_type_archive('product')) {
       $title = 'Shop Stuff';

    } else if (is_tax('product-type')) {
       $title = single_term_title();
    }
    return $title;

}
add_filter( 'get_the_archive_title', 'inhabitent_archive_title');
