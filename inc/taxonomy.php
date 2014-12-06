<?
function menus_init() {
	register_taxonomy(
		'Brunch',
		'menu',
		array(
			'label' => __( 'Brunch' ),
			'rewrite' => array( 
				'slug' => 'brunch',
				'show_ui' => true,
			),
			'hierarchical' => true,
		)
	);
	
	register_taxonomy(
		'Breakfast',
		'menu',
		array(
			'label' => __( 'Breakfast' ),
			'rewrite' => array( 
				'slug' => 'breakfast',
				'show_ui' => true,
			),
			'hierarchical' => true,
		)
	);

	register_taxonomy(
		'Lunch',
		'menu',
		array(
			'label' => __( 'Lunch' ),
			'rewrite' => array( 
				'slug' => 'lunch',
				'show_ui' => true,
			),
			'hierarchical' => true,
		)
	);
	register_taxonomy(
		'Dinner',
		'menu',
		array(
			'label' => __( 'Dinner' ),
			'rewrite' => array( 
				'slug' => 'dinner',
				'show_ui' => true,
			),
			'hierarchical' => true,
		)
	);	
	register_taxonomy(
		'Specials',
		'menu',
		array(
			'label' => __( 'Specials' ),
			'rewrite' => array( 
				'slug' => 'specials',
				'show_ui' => true,
			),
			'hierarchical' => true,
		)
	);
	register_taxonomy(
		'Happy Hour',
		'menu',
		array(
			'label' => __( 'Happy Hour' ),
			'rewrite' => array( 
				'slug' => 'happy-hour',
				'show_ui' => true,
			),
			'hierarchical' => true,
		)
	);	
	register_taxonomy(
		'Beverages',
		'menu',
		array(
			'label' => __( 'Beverages' ),
			'rewrite' => array( 
				'slug' => 'beverages',
				'show_ui' => true,
			),
			'hierarchical' => true,
		)
	);	
}
add_action( 'init', 'menus_init' );
?>