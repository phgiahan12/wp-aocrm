<?php
include 'tuyen-dung/td-init.php';

add_action( 'wp_enqueue_scripts', 'dotb_enqueue_styles' );
function dotb_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'dotb-style', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'dotb-style2', get_stylesheet_directory_uri() . '/style2.css' );
	wp_enqueue_script( 'dotb-js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '',true );
}


add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );


add_filter('manage_posts_columns', 'add_img_column');
add_filter('manage_posts_custom_column', 'manage_img_column', 10, 2);

function add_img_column($columns) {
	if ( get_post_type()=='post') {
		$columns = array_slice($columns, 0, 1, true) + array("img" => "Ảnh") + array_slice($columns, 1, count($columns) - 1, true);

	}
	return $columns;
}

function manage_img_column($column_name, $post_id) {
	if ( get_post_type()=='post') {
		if( $column_name == 'img' ) {
			echo "<div style='padding: 5px 10px;'>". get_the_post_thumbnail($post_id, 'thumbnail','style="max-width:50px;"')."</div>";
		}
	}
	return $column_name;
}

add_action('wp_footer','menu_overlay',20);
function menu_overlay() {
	echo '<div id="menu_overlay"></div>';
}

function remove_dashboard_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['e-dashboard-overview']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['elementor_dashboard_overview_widget']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['yith_dashboard_products_news']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['yith_dashboard_blog_news']);
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

function my_query_by_post_types( $query ) {
	$query->set( 'post_type', [ 'post','bang_gia'] );
}
add_action( 'elementor/query/{$query_id}', 'my_query_by_post_types' );

function my_remove_wp_seo_meta_box() {
	remove_meta_box('wpseo_meta', 'bang_gia', 'normal');
}
add_action('add_meta_boxes', 'my_remove_wp_seo_meta_box', 100);
function my_remove_wp_seo_meta_box_hai() {
remove_meta_box('yoast_internal_linking', 'bang_gia', 'normal');
}
add_action('add_meta_boxes', 'my_remove_wp_seo_meta_box_hai', 100);

add_action ('admin_enqueue_scripts', 'wpse_style_tax');

//Theme Option

//if( function_exists('acf_add_options_page') ) {
//
//    acf_add_options_page(array(
//        'page_title' 	=> 'Theme General Settings',
//        'menu_title'	=> 'Theme Settings',
//        'menu_slug' 	=> 'theme-general-settings',
//        'capability'	=> 'edit_posts',
//        'redirect'		=> false,
//        'position' => 1
//    ));
//
//    acf_add_options_sub_page(array(
//        'page_title' 	=> 'Theme Header Settings',
//        'menu_title'	=> 'Header',
//        'parent_slug'	=> 'theme-general-settings',
//    ));
//
//    acf_add_options_sub_page(array(
//        'page_title' 	=> 'Theme Footer Settings',
//        'menu_title'	=> 'Footer',
//        'parent_slug'	=> 'theme-general-settings',
//    ));
//
//}
if( function_exists('acf_add_options_page') ) {

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Mô tả thêm',
        'menu_title'	=> 'Mô tả thêm',
        'parent'	=> 'edit.php?post_type=goi_on_premise',

    ));
}
//add_action('wp_ajax_save_contact', 'save_contact');
//add_action('wp_ajax_nopriv_save_contact', 'save_contact');
//function save_contact(){
//    //Do whatever you want here...
//}

add_filter( 'wpcf7_form_elements', function($form) { 
$val = esc_url("https://crmedu.vn/".$_SERVER['REQUEST_URI']); 
$form = str_replace( 'pageurl', $val, $form ); 
return $form; 
} );

