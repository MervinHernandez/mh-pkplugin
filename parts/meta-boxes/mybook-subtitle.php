<?php
/*
post type: mybook
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
