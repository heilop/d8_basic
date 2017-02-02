<?php
/*
* @file
* Contains ̄̄\Drupal\d8_settings\Controller\MyPageController class.
*/

namespace Drupal\d8_basic\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for D8 settings module.
 */
class MyPageController extends ControllerBase {

  /**
   * Return custom markup for our custom Page.
   */
  public function customPage() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Welcome to my custom page'),
    ];
  }

  /**
   * Return custom markup for our custom Page.
   */
  public function paths($name) {
    return [
      '#type' => 'markup',
      '#markup' => t('My name is: @name', [
        '@name' => $name,
      ]),
    ];
  }
}
