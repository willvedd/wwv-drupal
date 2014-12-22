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

//-------------------
// Helper Variables
//-------------------
$path_to_theme = DRUPAL_ROOT . '/' . path_to_theme();

$path_to_includes = $path_to_theme . '/templates/includes/';

$path_to_images = DRUPAL_ROOT . '/' . path_to_theme() . '/images';