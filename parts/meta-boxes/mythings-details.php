<?php
/*
Title: Thing Details
Post Type: mything
Meta Box: true
Lock: true
*/
// Link | text | mything_link
  piklist('field', array(
    'type' => 'text'
    ,'field' => 'mything_link'
    ,'label' => 'Thing Link'
    ,'attributes' => array(
    'class' => 'text'
    ,'placeholder' => 'http://linkedin.com'
    )
  ));
// Rating | select | mything_rating
  piklist('field', array(
    'type' => 'select',
    'field' => 'mything_rating',
    'label' => 'Rating',
    'choices' => array(
      '1' => '1 star'
      ,'2' => '2 stars'
      ,'3' => '3 stars'
      ,'4' => '4 stars'
      ,'5' => '5 stars'
    )
  ));
