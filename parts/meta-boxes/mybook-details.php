<?php
/*
Title: Book Details
Post Type: mybook
Meta Box: true
Lock: true
*/
// Published Date | text | mybook_published
  piklist('field', array(
      'type' => 'text'
      ,'field' => 'mybook_published'
      ,'label' => 'Published Year'
      ,'value' => '2005'
      ,'attributes' => array(
        'class' => 'text'
      )
  ));
// Rating | select | mybook_rating
  piklist('field', array(
    'type' => 'select',
    'field' => 'mybook_rating',
    'label' => 'Rating',
    'choices' => array(
      '1' => '1 star'
      ,'2' => '2 stars'
      ,'3' => '3 stars'
      ,'4' => '4 stars'
      ,'5' => '5 stars'
    )
  ));
// Property | select | mybook_property
  piklist('field', array(
    'type' => 'radio',
    'field' => 'mybook_property',
    'label' => 'Property',
    'choices' => array(
      'own' => 'Own It',
      'want' => 'Want It',
    )
  ));
