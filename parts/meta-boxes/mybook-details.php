<?php
/*
Title: Book Details
Post Type: mybook
Meta Box: true
Lock: true
*/

// Published Date : full date picker
  piklist('field', array(
     'type' => 'datepicker',
     'field' => 'mybook_published',
     'label' => 'Published Date',
     'value' => date('M d, Y', time() + 604800), // set default value
     'options' => array(
       'dateFormat' => 'M d, yy'
     )
   ));
// Rating : form one to five stars
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
// Property : whether I own it or not
piklist('field', array(
   'type' => 'radio',
   'field' => 'mybook_property',
   'label' => 'Property',
   'choices' => array(
     'own' => 'Own It',
     'want' => 'Want It',
   )
 ));
