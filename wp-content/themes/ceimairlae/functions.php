<?php

add_theme_support( 'post-thumbnails' );

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
		'supports' => array('excerpt', 'thumbnail', 'comments', 'custom-fields'),
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
	register_post_type( 'recommendation', $args );

}

add_action( 'init', 'create_recommendation_cpt', 0 );

?>