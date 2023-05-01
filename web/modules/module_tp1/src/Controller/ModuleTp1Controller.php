<?php

declare(strict_types=1);

namespace Drupal\module_tp1\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for module-TP1 routes.
 */
final class ModuleTp1Controller extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build(string $name): array {
    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('Hello World %name !', ['%name' => strtolower($name)]),
    ];

    return $build;
  }

}
