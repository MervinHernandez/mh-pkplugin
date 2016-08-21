<?php
/*
Title: Book Details
Post Type: mybook
Meta Box: true
Lock: true
*/
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
