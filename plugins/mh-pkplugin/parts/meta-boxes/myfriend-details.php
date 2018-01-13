<?php
/*
Title: Friend Details
Post Type: myfriend
Meta Box: true
Lock: true
*/
// Link | text | myfriend_link
  piklist('field', array(
    'type' => 'text'
    ,'field' => 'myfriend_link'
    ,'label' => 'Fridnly Link'
    ,'attributes' => array(
    'class' => 'text'
    ,'placeholder' => 'http://whitneydolo.com'
    )
  ));
// Logo | file | myfriend_logo
piklist('field', array(
  'type' => 'file',
  // 'field' => 'upload_basic',
  'field' => 'myfriend_logo',
  'label' => 'Add File(s)',
  'description' => 'This is the basic upload field.',
));
