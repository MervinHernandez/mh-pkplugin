<?php
/*
title: Main Book Content
post type: mybook
meta box: false
lock: true
*/

/* Book Author Field */
  piklist('field', array(
  'type' => 'text'
  ,'field' => 'mybook_author'
  ,'template' => 'field' // format the field without a label
  ,'attributes' => array(
    'class' => 'large-text'
    ,'placeholder' => 'Book Author'
  )
  ));
/* Excerpt Box */
  piklist ('field', array (
    'type' => 'textarea'
  , 'field' => 'post_excerpt'
  , 'scope' => 'post'
  , 'template' => 'field'
  , 'attributes' => array(
      'class' => 'large-text'
      ,'placeholder' => 'Excerpt'
  )
  ));

/* Editor Box */
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
    ))
  ));
