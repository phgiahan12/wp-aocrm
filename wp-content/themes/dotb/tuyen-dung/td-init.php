<?php
// if (is_post_type_archive( 'tuyen-dung' ) ||is_singular( 'tuyen-dung' )||is_tax('job-cat')) {
	add_action( 'wp_enqueue_scripts', 'td_enqueue_styles',12 );
// }
function td_enqueue_styles() {
	wp_enqueue_style( 'td_style', get_stylesheet_directory_uri() . '/tuyen-dung/td_style.css' );
}

require_once get_stylesheet_directory() . '/tuyen-dung/widget-related-job.php';
require_once get_stylesheet_directory() . '/tuyen-dung/widget-archive-job.php';

if ( ! function_exists('reg_post_type') ) {
	function reg_post_type() {

		$labels = array(
			'name'                  => _x( 'Tuyển dụng', 'Post Type General Name', 'hello-elementor' ),
			'singular_name'         => _x( 'Tuyển dụng', 'Post Type Singular Name', 'hello-elementor' ),
			'menu_name'             => __( 'Tuyển dụng', 'hello-elementor' ),
			'name_admin_bar'        => __( 'Tuyển dụng', 'hello-elementor' ),
			'archives'              => __( 'Item Archives', 'hello-elementor' ),
			'attributes'            => __( 'Item Attributes', 'hello-elementor' ),
			'parent_item_colon'     => __( 'Parent Item:', 'hello-elementor' ),
			'all_items'             => __( 'All Items', 'hello-elementor' ),
			'add_new_item'          => __( 'Add New Item', 'hello-elementor' ),
			'add_new'               => __( 'Add New', 'hello-elementor' ),
			'new_item'              => __( 'New Item', 'hello-elementor' ),
			'edit_item'             => __( 'Edit Item', 'hello-elementor' ),
			'update_item'           => __( 'Update Item', 'hello-elementor' ),
			'view_item'             => __( 'View Item', 'hello-elementor' ),
			'view_items'            => __( 'View Items', 'hello-elementor' ),
			'search_items'          => __( 'Search Item', 'hello-elementor' ),
			'not_found'             => __( 'Not found', 'hello-elementor' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'hello-elementor' ),
			'featured_image'        => __( 'Featured Image', 'hello-elementor' ),
			'set_featured_image'    => __( 'Set featured image', 'hello-elementor' ),
			'remove_featured_image' => __( 'Remove featured image', 'hello-elementor' ),
			'use_featured_image'    => __( 'Use as featured image', 'hello-elementor' ),
			'insert_into_item'      => __( 'Insert into item', 'hello-elementor' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'hello-elementor' ),
			'items_list'            => __( 'Items list', 'hello-elementor' ),
			'items_list_navigation' => __( 'Items list navigation', 'hello-elementor' ),
			'filter_items_list'     => __( 'Filter items list', 'hello-elementor' ),
		);
		$args = array(
			'label'                 => __( 'Tuyển dụng', 'hello-elementor' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail'/*, 'editor'*/ ),
			'taxonomies'            => array( 'job-cat' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-welcome-widgets-menus',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		register_post_type( 'tuyen-dung', $args );

		$labels = array(
			'name'                       => _x( 'Chuyên mục tuyển dụng', 'Taxonomy General Name', 'hello-elementor' ),
			'singular_name'              => _x( 'Chuyên mục tuyển dụng', 'Taxonomy Singular Name', 'hello-elementor' ),
			'menu_name'                  => __( 'Taxonomy', 'hello-elementor' ),
			'all_items'                  => __( 'All Items', 'hello-elementor' ),
			'parent_item'                => __( 'Parent Item', 'hello-elementor' ),
			'parent_item_colon'          => __( 'Parent Item:', 'hello-elementor' ),
			'new_item_name'              => __( 'New Item Name', 'hello-elementor' ),
			'add_new_item'               => __( 'Add New Item', 'hello-elementor' ),
			'edit_item'                  => __( 'Edit Item', 'hello-elementor' ),
			'update_item'                => __( 'Update Item', 'hello-elementor' ),
			'view_item'                  => __( 'View Item', 'hello-elementor' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'hello-elementor' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'hello-elementor' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'hello-elementor' ),
			'popular_items'              => __( 'Popular Items', 'hello-elementor' ),
			'search_items'               => __( 'Search Items', 'hello-elementor' ),
			'not_found'                  => __( 'Not Found', 'hello-elementor' ),
			'no_terms'                   => __( 'No items', 'hello-elementor' ),
			'items_list'                 => __( 'Items list', 'hello-elementor' ),
			'items_list_navigation'      => __( 'Items list navigation', 'hello-elementor' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => false,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'job-cat', array( 'post' ), $args );

	}
	add_action( 'init', 'reg_post_type', 0 );

}

if ( !function_exists( 'hello_pagination' ) ) {

	function hello_pagination() {

		$prev_arrow = 'Previous';
		$next_arrow = 'Next';

		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 99999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}

}
