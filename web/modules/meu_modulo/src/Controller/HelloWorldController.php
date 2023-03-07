<?php

namespace Drupal\meu_modulo\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloWorldController extends ControllerBase {

  public function helloWorld() {
    return [
      '#markup' => $this->t('Hello, World!'),
    ];
  }

}