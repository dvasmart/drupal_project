<?php

namespace Drupal\my_config_entity;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Provides an interface defining a my config entity entity type.
 */
interface MyConfigEntityInterface extends ConfigEntityInterface {
    
    public function getType(): string;

    public function getPlugins(): array;
}
