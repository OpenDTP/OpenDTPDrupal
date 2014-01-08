<?php

/**
 * @file
 * Administration forms for the OpenDTP module.
 */


function opendtp_admin_settings() 
{
  $form['opendtp_key'] = array(
    '#type' => 'textfield',
    '#title' => t('Key'),
    '#description' => t('Your API key'),
    '#default_value' => variable_get('opendtp_key', ''),
  );

  $form['opendtp_api_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Server URL'),
    '#description' => t('The API server URL'),
    '#default_value' => variable_get('opendtp_api_url', ''),
  );

  // Provide a list of the available commands.
  $form['commands'] = array(
    '#type' => 'fieldset',
    '#title' => t('Commandes Disponibles'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#description' => '',
  );
  $commands = opendtp('api-list_accessible_cmds');
  if (!empty($commands)) {
    $cmds = array();
    foreach ($commands as $command) {
      $cmds[] = '<code>' . $command['cmd'] . '</code>';
    }
    $form['commands']['#description'] = implode(', ', $cmds);
  }
  else {
    $form['commands']['#description'] = t('Il n\'y a aucune commande accessible avec cette clef.');
  }

  return system_settings_form($form);
}