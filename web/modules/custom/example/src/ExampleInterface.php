<?php

namespace Drupal\example;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Provides an interface defining a example entity type.
 */
interface ExampleInterface extends ConfigEntityInterface {

  public function getType(): string;

  public function getPlugins(): array;
}