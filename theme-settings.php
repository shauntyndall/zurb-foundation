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
  $form['theme_javascript'] = array(
    '#type' => 'details',
    '#title' => t('Javascript Files'),
  );

  $form['theme_javascript']['use_zepto'] = array(
    '#type' => 'checkbox',
    '#title' => t('Include Zepto.js'),
    '#description' => t('Foundation can leverage Zepto over jQuery - if you want to enable it .......'),
    '#default_value' => theme_get_setting('use_zepto', 'zurb_foundation'),
  );

  $form['theme_javascript']['use_respondjs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Implement Respond.js'),
    '#description' => t('Foundation 4.x does not support IE8, but you can include Respond.js to add additional support for Internet Explorer.'),
    '#default_value' => theme_get_setting('use_respondjs', 'zurb_foundation'),
  );
}