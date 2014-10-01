<?php

/**
 * @file
 * template.php
*/

function vikingo_form_alter(&$form, &$form_state, $form_id){
  // Add to cart form overrides
  if (substr($form_id, 0, 30) == 'commerce_cart_add_to_cart_form'){
    //kpr($form);
    $form['attributes']['field_door_color']['#prefix'] = '<div class="col-sm-4">';
    $form['attributes']['field_door_color']['#suffix'] = '</div>';

    $form['attributes']['field_wall_color']['#prefix'] = '<div class="col-sm-4">';
    $form['attributes']['field_wall_color']['#suffix'] = '</div>';

    $form['attributes']['field_roof_color']['#prefix'] = '<div class="col-sm-4">';
    $form['attributes']['field_roof_color']['#suffix'] = '</div>';
  }
}
