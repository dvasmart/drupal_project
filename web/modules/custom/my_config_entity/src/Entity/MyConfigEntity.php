<?php

namespace Drupal\my_config_entity\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\my_config_entity\MyConfigEntityInterface;

/**
 * Defines the my config entity entity type.
 *
 * @ConfigEntityType(
 *   id = "my_config_entity",
 *   label = @Translation("My Config Entity"),
 *   label_collection = @Translation("My Config Entities"),
 *   label_singular = @Translation("my config entity"),
 *   label_plural = @Translation("my config entities"),
 *   label_count = @PluralTranslation(
 *     singular = "@count my config entity",
 *     plural = "@count my config entities",
 *   ),
 *   handlers = {
 *     "list_builder" = "Drupal\my_config_entity\MyConfigEntityListBuilder",
 *     "form" = {
 *       "add" = "Drupal\my_config_entity\Form\MyConfigEntityForm",
 *       "edit" = "Drupal\my_config_entity\Form\MyConfigEntityForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm"
 *     }
 *   },
 *   config_prefix = "my_config_entity",
 *   admin_permission = "administer my_config_entity",
 *   links = {
 *     "collection" = "/admin/structure/my-config-entity",
 *     "add-form" = "/admin/structure/my-config-entity/add",
 *     "edit-form" = "/admin/structure/my-config-entity/{my_config_entity}",
 *     "delete-form" = "/admin/structure/my-config-entity/{my_config_entity}/delete"
 *   },
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "description",
 *     "type",
 *     "plugins",
 *   }
 * )
 */
class MyConfigEntity extends ConfigEntityBase implements MyConfigEntityInterface {

  /**
   * The my config entity ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The my config entity label.
   *
   * @var string
   */
  protected $label;

  /**
   * The my_config_entity description.
   *
   * @var string
   */
  protected $description;

  /**
   * The type of bundle.
   *
   * @var string
   */
  protected $type;

  protected $plugins;

  public function getPlugins(): array {
    return array_filter($this->plugins);
  }

  public function getType(): string {
    return $this->type;
  }

}
