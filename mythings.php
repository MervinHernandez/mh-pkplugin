<?php
/***
Definition for MyThings Post Type
= = =
Related Piklist Items
> mythings-main.php
> mythings-details.php
***/
  add_filter('piklist_post_types', 'mythings_post_type');
  function mythings_post_type($post_types)
  {
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
        //Metaboxes to hide go here
      )
    );
    return $post_types;
  }
