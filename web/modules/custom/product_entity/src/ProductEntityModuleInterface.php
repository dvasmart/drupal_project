<?php

namespace Drupal\product_entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a product entity module entity type.
 */
interface ProductEntityModuleInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
