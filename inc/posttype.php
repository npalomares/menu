<?
function create_menu() {
	$labels = array(
		'name'                => 'Menu',
		'singular_name'       => 'Menu',
		'menu_name'           => 'Menus',
		'parent_item_colon'   => 'Parent Menus:',
		'all_items'           => 'All Menus',
		'view_item'           => 'View Menus',
		'add_new_item'        => 'Add New Menu',
		'add_new'             => 'New Menu',
		'edit_item'           => 'Edit Menu',
		'update_item'         => 'Update Menu',
		'search_items'        => 'Search Menus',
		'not_found'           => 'No Menus found',
		'not_found_in_trash'  => 'No Menus found in Trash',
	);

	$args = array(
		'label'               => 'Menu',
		'description'         => 'Menu post type',
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'thumbnail', 'revisions', 'page-attributes', 'editor'),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		//'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'capability_type'     => 'page',
		'menu_icon' => plugins_url( 'gm_icon_bw.png', __FILE__ ),
		'rewrite'            => array( 'slug' => 'menu' ),
	);

	register_post_type( 'menu', $args );
}

// Hook into the 'init' action
add_action( 'init', 'create_menu', 0 );

  	// Custom image size for Sealfit menu Thumbs
	//add_image_size('menu-gallery-thumb', 720, 460, true);

?>