<?php

namespace Drupal\behaviors_example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines HelloController class.
 */
class BehaviorsController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function content() {

    return [
        '#theme' => 'behaviors_example',
    ];
  }
}