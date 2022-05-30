<?php

namespace Drupal\simple_entity\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Simple Entity type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "simple_entity_type",
 *   label = @Translation("Simple Entity type"),
 *   label_collection = @Translation("Simple Entity types"),
 *   label_singular = @Translation("simple entity type"),
 *   label_plural = @Translation("simple entities types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count simple entities type",
 *     plural = "@count simple entities types",
 *   ),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\simple_entity\Form\SimpleEntityTypeForm",
 *       "edit" = "Drupal\simple_entity\Form\SimpleEntityTypeForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\simple_entity\SimpleEntityTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   admin_permission = "administer simple entity types",
 *   bundle_of = "simple_entity",
 *   config_prefix = "simple_entity_type",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/simple_entity_types/add",
 *     "edit-form" = "/admin/structure/simple_entity_types/manage/{simple_entity_type}",
 *     "delete-form" = "/admin/structure/simple_entity_types/manage/{simple_entity_type}/delete",
 *     "collection" = "/admin/structure/simple_entity_types"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "uuid",
 *   }
 * )
 */
class SimpleEntityType extends ConfigEntityBundleBase {

  /**
   * The machine name of this simple entity type.
   *
   * @var string
   */
  protected $id;

  /**
   * The human-readable name of the simple entity type.
   *
   * @var string
   */
  protected $label;

}
