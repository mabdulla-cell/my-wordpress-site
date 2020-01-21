<?php
// Register Custom Post Type About
function create_about_cpt() {

	$labels = array(
		'name' => _x( 'About', 'Post Type General Name', 'quickCloud' ),
		'singular_name' => _x( 'About', 'Post Type Singular Name', 'quickCloud' ),
		'menu_name' => _x( 'About', 'Admin Menu text', 'quickCloud' ),
		'name_admin_bar' => _x( 'About', 'Add New on Toolbar', 'quickCloud' ),
		'archives' => __( 'About Archives', 'quickCloud' ),
		'attributes' => __( 'About Attributes', 'quickCloud' ),
		'parent_item_colon' => __( 'Parent About:', 'quickCloud' ),
		'all_items' => __( 'All About', 'quickCloud' ),
		'add_new_item' => __( 'Add New About', 'quickCloud' ),
		'add_new' => __( 'Add New', 'quickCloud' ),
		'new_item' => __( 'New About', 'quickCloud' ),
		'edit_item' => __( 'Edit About', 'quickCloud' ),
		'update_item' => __( 'Update About', 'quickCloud' ),
		'view_item' => __( 'View About', 'quickCloud' ),
		'view_items' => __( 'View About', 'quickCloud' ),
		'search_items' => __( 'Search About', 'quickCloud' ),
		'not_found' => __( 'Not found', 'quickCloud' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'quickCloud' ),
		'featured_image' => __( 'Featured Image', 'quickCloud' ),
		'set_featured_image' => __( 'Set featured image', 'quickCloud' ),
		'remove_featured_image' => __( 'Remove featured image', 'quickCloud' ),
		'use_featured_image' => __( 'Use as featured image', 'quickCloud' ),
		'insert_into_item' => __( 'Insert into About', 'quickCloud' ),
		'uploaded_to_this_item' => __( 'Uploaded to this About', 'quickCloud' ),
		'items_list' => __( 'About list', 'quickCloud' ),
		'items_list_navigation' => __( 'About list navigation', 'quickCloud' ),
		'filter_items_list' => __( 'Filter About list', 'quickCloud' ),
	);
	$args = array(
		'label' => __( 'About', 'quickCloud' ),
		'description' => __( '', 'quickCloud' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-customizer',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
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
	register_post_type( 'about', $args );

}
add_action( 'init', 'create_about_cpt', 0 );
?>