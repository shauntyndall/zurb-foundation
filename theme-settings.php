<?php

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function zurb_foundation_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['theme_ui'] = array(
    '#type' => 'details',
    '#title' => t('UI Elements'),
  );

  $form['theme_ui']['status_in_reveal'] = array(
    '#type' => 'checkbox',
    '#title' => t('Display status messages in Reveal'),
    '#description' => t('This will display status messages in a Foundation Reveal modal instead of print them into the page output.'),
    '#default_value' => theme_get_setting('status_in_reveal', 'zurb_foundation'),
  );

  $form['theme_javascript'] = array(
    '#type' => 'details',
    '#title' => t('Javascript Files'),
  );

  $form['theme_javascript']['use_zepto'] = array(
    '#type' => 'checkbox',
    '#title' => t('Include Zepto.js'),
    '#description' => t('Foundation can leverage Zepto over jQuery - you can optionally enable it if you want to.'),
    '#default_value' => theme_get_setting('use_zepto', 'zurb_foundation'),
  );

  $form['theme_javascript']['use_respondjs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Implement Respond.js'),
    '#description' => t('Foundation 4.x does not support IE8, but you can include Respond.js to add additional support for Internet Explorer.'),
    '#default_value' => theme_get_setting('use_respondjs', 'zurb_foundation'),
  );
}