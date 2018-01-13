<?php
/***
Definition for MyThings Post Type
= = =
Related Piklist Items
> mythings-main.php
> mythings-details.php
***/
// Admin Page
add_filter('piklist_admin_pages', 'my_admin_pages');
function my_admin_pages($pages) {

	$pages[] = array(
		'page_title' => 'About this plugin'
		,'menu_title' => 'About'
		,'menu_slug' => 'about_my_plugin'
		,'capability' => 'manage_options'
		,'sub_menu' => 'edit.php?post_type=mything'
	);

	return $pages;
}

// Define the new post type
add_filter('piklist_post_types', 'mythings_post_type');
function mythings_post_type($post_types) {
  $post_types['mything'] = array(
    'labels' => piklist('post_type_labels', 'My Things')
    ,'title' => __('My Gadgets and Things')
    // ,'menu_icon' => piklist('url', 'piklist') . '/parts/img/piklist-menu-icon.svg'
    // ,'page_icon' => piklist('url', 'piklist') . '/parts/img/piklist-page-icon-32.png'
    ,'supports' => array(
      'title'
      , 'thumbnail'
    )
    ,'public' => true
    ,'admin_body_class' => array(
      'mythings'
    )
    ,'has_archive' => true
    ,'rewrite' => array(
      'slug' => 'mythings'
    )
    ,'capability_type' => 'post'
    ,'edit_columns' => array(
      'title' => __('Name')
    )
    ,'hide_meta_box' => array(
      'mymetabox_revslider_0'
    )
    ,'menu_icon' => 'dashicons-carrot' 
  );
  return $post_types;
}

// Declare the kind taxonomy
add_filter('piklist_taxonomies', 'thing_kind_tax');
function thing_kind_tax($taxonomies) {
  $taxonomies[] = array(
  'post_type' => 'mything'
  ,'name' => 'mything_kind' // Table > term_taxonomy
  ,'show_admin_column' => true
  ,'configuration' => array(
    'hierarchical' => true
    ,'labels' => piklist('taxonomy_labels', 'Kind') // Admin Menu label
    ,'hide_meta_box' => false
    ,'show_ui' => true
    ,'query_var' => true
    ,'rewrite' => array(
      'slug' => 'thing-kind'
    )
  )
);
  return $taxonomies;
};
