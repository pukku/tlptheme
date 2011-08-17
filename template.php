<?php

/**
 * Implements hook_preprocess_html().
 */
function lwp_preprocess_html (&$variables) {
  /* add the reset.css file before any system css files. */
  /* see: http://fourkitchens.com/blog/2010/11/12/promiscuous-stylesheets-drupal-7 */
  $reset = drupal_get_path('theme', 'lwp') . '/reset.css';

  $options = array(
    'group'  => CSS_SYSTEM - 1, // this is an implementation hack
    'weight' => -10,
  );

  drupal_add_css($reset, $options);
}
