<?php

namespace Drupal\simple_entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a simple entity entity type.
 */
interface SimpleEntityInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
