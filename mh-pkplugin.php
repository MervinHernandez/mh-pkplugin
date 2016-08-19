<?php
/*
Plugin Name: MH.com PIKLIST Plugin
Plugin URI: http://piklist.com
Description: Adds the custom PikList-enabled functionality and features to my site
Version: 0.0.2
Author: Mervin Hernandez
Author URI: http://mervinhernandez.com
Plugin Type: Piklist
Text Domain: mh-pkplugin
*/
if (!defined('ABSPATH'))
  {
    exit;
  }

/*** My Books POST TYPE
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
        ,'editor'
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
/* Book Author Field */
  function my_add_sub_title() {
  piklist('field', array(
    'type' => 'text'
    ,'field' => 'mybook_author'
    ,'template' => 'field' // format the field without a label
    ,'attributes' => array(
      'class' => 'large-text'
      ,'placeholder' => 'Book Author'
    )
  ));
}
add_action('edit_form_after_title', 'my_add_sub_title');
/*** End of MyBooks ***/
