<?php

add_theme_support( 'post-thumbnails' );

/**
 * - add menus
 * - customize the classes on <a> and <li> for the header
 * - add class 'active' only on current <li>
*/
function register_menus() {
	register_nav_menus(
		array(
			'side_menu' => __( 'Side Menu' ),
			'lang_menu' => esc_html__('Language Menu', 'textdomain')
		)
	);
}
add_action( 'init', 'register_menus' );

/* add class to <li> in menus */
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

/* add class to <a> in menus */
function add_additional_class_on_links( $classes, $item, $args ) {
	if (property_exists($args, 'link_class')) {
	  	$classes['class'] = $args->link_class;
	}
	return $classes;
}
add_filter( 'nav_menu_link_attributes', 'add_additional_class_on_links', 1, 3 );

/* add class active to current element in menu */
function special_nav_class ($classes, $item) {
	if (in_array('current-menu-item', $classes) ){
		$classes[] = 'active ';
	}
	return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);


// Register Custom Post Type Recommendation
function create_recommendation_cpt() {

	$labels = array(
		'name' => _x( 'Recommendations', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Recommendation', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Recommendations', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Recommendation', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Recommendation Archives', 'textdomain' ),
		'attributes' => __( 'Recommendation Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Recommendation:', 'textdomain' ),
		'all_items' => __( 'All Recommendations', 'textdomain' ),
		'add_new_item' => __( 'Add New Recommendation', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Recommendation', 'textdomain' ),
		'edit_item' => __( 'Edit Recommendation', 'textdomain' ),
		'update_item' => __( 'Update Recommendation', 'textdomain' ),
		'view_item' => __( 'View Recommendation', 'textdomain' ),
		'view_items' => __( 'View Recommendations', 'textdomain' ),
		'search_items' => __( 'Search Recommendation', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Recommendation', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Recommendation', 'textdomain' ),
		'items_list' => __( 'Recommendations list', 'textdomain' ),
		'items_list_navigation' => __( 'Recommendations list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Recommendations list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Recommendation', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-location',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'custom-fields', 'revisions'),
		'taxonomies' => array('category'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'recommendation', $args );

}

add_action( 'init', 'create_recommendation_cpt', 0 );

// Register Custom Post Type Venue
function create_venue_cpt() {

	$labels = array(
		'name' => _x( 'Venues', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Venue', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Venues', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Venue', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Venue Archives', 'textdomain' ),
		'attributes' => __( 'Venue Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Venue:', 'textdomain' ),
		'all_items' => __( 'All Venues', 'textdomain' ),
		'add_new_item' => __( 'Add New Venue', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Venue', 'textdomain' ),
		'edit_item' => __( 'Edit Venue', 'textdomain' ),
		'update_item' => __( 'Update Venue', 'textdomain' ),
		'view_item' => __( 'View Venue', 'textdomain' ),
		'view_items' => __( 'View Venues', 'textdomain' ),
		'search_items' => __( 'Search Venue', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Venue', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Venue', 'textdomain' ),
		'items_list' => __( 'Venues list', 'textdomain' ),
		'items_list_navigation' => __( 'Venues list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Venues list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Venue', 'textdomain' ),
		'description' => __( 'The venues where the wedding will take place', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-buddicons-groups',
		'supports' => array('title', 'excerpt', 'editor', 'thumbnail', 'revisions'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'venue', $args );

}
add_action( 'init', 'create_venue_cpt', 0 );

/* Upgrade the Author Role */
function author_level_up() {
    $role = get_role(  'author' );
    
    // add a set  of new capabilities
    $role->add_cap(  'edit_pages' );
    $role->add_cap(  'edit_published_pages' );
    $role->add_cap(  'publish_pages' );
}
add_action( 'admin_init', 'author_level_up');

/* Allow Editor to access Ninja Forms */

// Must use all three filters for this to work properly. 
add_filter( 'ninja_forms_admin_parent_menu_capabilities',   'nf_subs_capabilities' ); // Parent Menu
add_filter( 'ninja_forms_admin_all_forms_capabilities',     'nf_subs_capabilities' ); // Forms Submenu
add_filter( 'ninja_forms_admin_submissions_capabilities',   'nf_subs_capabilities' ); // Submissions Submenu

function nf_subs_capabilities( $cap ) {
    return 'edit_posts'; // EDIT: User Capability
}

/**
 * Filter hook used in the API route permission callback to retrieve submissions
 *
 * return bool as for authorized or not.
 */
add_filter( 'ninja_forms_api_allow_get_submissions', 'nf_define_permission_level', 10, 2 );
add_filter( 'ninja_forms_api_allow_delete_submissions', 'nf_define_permission_level', 10, 2 );
add_filter( 'ninja_forms_api_allow_update_submission', 'nf_define_permission_level', 10, 2 );
add_filter( 'ninja_forms_api_allow_handle_extra_submission', 'nf_define_permission_level', 10, 2 );
add_filter( 'ninja_forms_api_allow_email_action', 'nf_define_permission_level', 10, 2 );

function nf_define_permission_level() {
  
  $allowed = \current_user_can("delete_others_posts");
  
  return $allowed;
}

/* Custom strings for translation */
if ( !function_exists( 'pll_register_string' ) ) { 
    require_once '/include/api.php'; 
}
pll_register_string('Venues', 'Venues');
pll_register_string('Recommendations', 'Recommendations');
pll_register_string('not-found-title', 'not-found-title');
pll_register_string('not-found-message', 'not-found-message');