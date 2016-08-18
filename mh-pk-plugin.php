<?php
/*
Plugin Name: MervinHernandez.com - PikList 
Plugin URI: http://piklist.com
Description: Adds the PikList functionality and features to my site
Version: 1.0
Author: Mervin Hernandez
Author URI: http://mervinhernandez.com
Plugin Type: Piklist
Text Domain: mh-pk-plugin
*/

if (!defined('ABSPATH'))
  {
    exit;
  }

/*
  = = =
  NEW POST TYPE = Friends
    Meta-boxes
      friends-fields.php
      friends-editor.php
    Workflows
      
  = = = 
*/
  add_filter('piklist_post_types', 'define_friends_pt');
  function define_friends_pt($post_types)
  {
    $post_types['friends'] = array(
      'labels' => piklist('post_type_labels', 'Friends')
      ,'title' => __('Enter a new Friend name')
      //,'menu_icon' => piklist('url', 'piklist') . '/parts/img/piklist-menu-icon.svg'
      //,'page_icon' => piklist('url', 'piklist') . '/parts/img/piklist-page-icon-32.png'
      ,'supports' => array(
        'title'
      , 'author'
    )
      ,'public' => true
      ,'admin_body_class' => array(
        'pk-friends'
      )
      ,'has_archive' => false
      ,'rewrite' => array(
        'slug' => 'friends'
      )
      ,'capability_type' => 'post'
      ,'edit_columns' => array(
        'title' => __('Friends')
        ,'author' => __('Created by')
      )
      ,'hide_meta_box' => array(
        'slug'
        ,'author'
      , 'wpseo_meta'
      )      
    );

    return $post_types;
  }