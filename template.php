<?php

/**
 * Implements hook_preprocess_html().
 */
function lwp_preprocess_html (&$variables) {
  /* add the reset.css file before any system css files. */
  /* see: http://fourkitchens.com/blog/2010/11/12/promiscuous-stylesheets-drupal-7 */
/*  $reset = drupal_get_path('theme', 'lwp') . '/reset.css';

  $options = array(
    'group'  => CSS_SYSTEM - 1, // this is an implementation hack
    'weight' => -10,
  );

drupal_add_css($reset, $options); */
}

function lwp_arb_pair_display ($variables) {
  $output = '';

  $output .= '<ul class="lwp-arb-pair-list">';

  foreach ($variables['items'] as $r) {
    $output .= '<li> &nbsp; '; // the &nbsp; makes the li be the correct height
    $output .= '<p class="lwp-arb-pair-left">'  . $r['arb_pair_val_1'] . '</p>';
    $output .= '<p class="lwp-arb-pair-right">' . $r['arb_pair_val_2'] . '</p>';
    $output .= '</li>' . "\n";
  }

  $output .= '</ul>' . "\n";
  $output .= '<br style="clear:both;" />';

  return '<div>' . "\n" . $output . "\n" . '</div>' . "\n";
}
