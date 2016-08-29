<?php
/***
Definition for MyThings Post Type
= = =
Related Piklist Items
> mythings-main.php
> mythings-details.php
***/
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
