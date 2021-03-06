<?php
/***
Definition for MyFriends Post Type
= = =
Related Piklist Items
> myfriend-main.php
> myfriend-details.php
***/
  add_filter('piklist_post_types', 'myfriends_post_type');
  function myfriends_post_type($post_types)
  {
    $post_types['myfriend'] = array(
      'labels' => piklist('post_type_labels', 'My Friends')
      ,'title' => __('My friends and colleagues')
      // ,'menu_icon' => piklist('url', 'piklist') . '/parts/img/piklist-menu-icon.svg'
      // ,'page_icon' => piklist('url', 'piklist') . '/parts/img/piklist-page-icon-32.png'
      ,'supports' => array(
        'title'
        , 'thumbnail'
      )
      ,'public' => true
      ,'admin_body_class' => array(
        'myfriends'
      )
      ,'has_archive' => true
      ,'rewrite' => array(
        'slug' => 'myfriends'
      )
      ,'capability_type' => 'post'
      ,'edit_columns' => array(
        'title' => __('Name')
      )
      ,'hide_meta_box' => array(
        //Metaboxes to hide go here
      )
      , 'menu_icon' => 'dashicons-groups'      
    );
    return $post_types;
  }
