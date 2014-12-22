<?php
function wwv_preprocess_node(&$vars, $hook) {
  $vars['theme_hook_suggestions'][] = 'node__'.$vars['node']->type;
  $vars['theme_hook_suggestions'][] = 'node__'.$vars['node']->type.'__'.$vars['view_mode'];
}

//-------------------
// Custom Functions
//-------------------
function nid_url($nid){
  return url('node/'.$nid);
}

function bean_render($delta){
  $bean = block_load('bean', $delta);
  $bean1 = _block_render_blocks(array($bean));
  $bean2 = _block_get_renderable_array($bean1);
  return drupal_render($bean2);
}

//-------------------
// Helper Variables
//-------------------
$path_to_theme = DRUPAL_ROOT . '/' . path_to_theme();

$path_to_includes = $path_to_theme . '/templates/includes/';

$path_to_images = DRUPAL_ROOT . '/' . path_to_theme() . '/images';