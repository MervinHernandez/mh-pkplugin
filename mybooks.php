<?php
/***
My Books POST TYPE
+ Meta-box: mybook-details
***/
  add_filter('piklist_post_types', 'mybooks_post_type');
  function mybooks_post_type($post_types)
  {
    $post_types['mybook'] = array(
      'labels' => piklist('post_type_labels', 'My Books')
      ,'title' => __('My Library of books')
      // ,'menu_icon' => piklist('url', 'piklist') . '/parts/img/piklist-menu-icon.svg'
      // ,'page_icon' => piklist('url', 'piklist') . '/parts/img/piklist-page-icon-32.png'
      ,'supports' => array(
        'title'
        , 'author'
        , 'excerpt'
      )
      ,'public' => true
      ,'admin_body_class' => array(
        'mybooks'
      )
      ,'has_archive' => true
      ,'rewrite' => array(
        'slug' => 'mybooks'
      )
      ,'capability_type' => 'post'
      ,'edit_columns' => array(
        'title' => __('Title')
      )
      ,'hide_meta_box' => array(
        //Metaboxes to hide go here
      )
    );
    return $post_types;
  }
