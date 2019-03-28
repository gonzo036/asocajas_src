<?php

// Custom post types creation
function create_posttype() {

	 ////////////////////
	// POST TYPES
	///////////////////

	//Post Type Investigaciones

	register_post_type( 'investigaciones',
	// CPT Options
	    array(
	        'labels' => array(
	            'name' => __( 'investigaciones' ),
	            'singular_name' => __( 'investigacion' )
	        ),
	        'rewrite' => array('slug' => 'investigacion'),
	        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
	        'public' => true,
	        'hierarchical'        => false,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_nav_menus'   => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 5,
	        'can_export'          => true,
	        'has_archive'         => true,
	        'exclude_from_search' => false,
	        'publicly_queryable'  => true,
	        'capability_type'     => 'post'
	    )
	);

	//Post Type Videos

	register_post_type( 'videos',
	// CPT Options
	    array(
	        'labels' => array(
	            'name' => __( 'Videos' ),
	            'singular_name' => __('Video')
	        ),
	        'rewrite' => array('slug' => 'video'),
	        'supports' => array( 'title', 'thumbnail', 'custom-fields'),
	        'public' => true,
	        'hierarchical'        => false,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_nav_menus'   => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 6,
	        'can_export'          => true,
	        'has_archive'         => true,
	        'exclude_from_search' => true,
	        'publicly_queryable'  => true,
	        'capability_type'     => 'post'
	    )
	);

	//Post Type Galería

	register_post_type( 'items-galeria',
	// CPT Options
	    array(
	        'labels' => array(
	            'name' => __( 'Item Galería' ),
	            'singular_name' => __('Item Galería')
	        ),
	        'rewrite' => array('slug' => 'item-galeria'),
	        'supports' => array( 'title', 'thumbnail', 'custom-fields', 'revisions'),
	        'public' => true,
	        'hierarchical'        => false,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_nav_menus'   => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 7,
	        'can_export'          => true,
	        'has_archive'         => true,
	        'exclude_from_search' => true,
	        'publicly_queryable'  => true,
	        'capability_type'     => 'post'
	    )
	);

	//flush_rewrite_rules();
}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );