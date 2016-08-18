<?php
/*
Title: Main Friend Information
Post Type: friends
Order: 100
Lock: true
Meta Box: false
Collapse: false
*/
piklist('field', array(
  'type' => 'text'
  ,'field' => 'subtitle'
  ,'label' => 'Subtitle'
));

  piklist('field', array(
    'type' => 'editor',
    'field' => 'post_content', // This is the field name of the WordPress default editor
    'scope' => 'post', // Save to the wp_post table
    'label' => 'Post Content',
    'template' => 'field', // Only display the field not the label
    'options' => array( // Pass any option that is accepted by wp_editor()
      'wpautop' => true,
      'media_buttons' => true,
      'shortcode_buttons' => true,
      'teeny' => false,
      'dfw' => false,
      'quicktags' => true,
      'drag_drop_upload' => true,
      'tinymce' => array(
        'resize' => false,
        'wp_autoresize_on' => true
      )
    )
  ));