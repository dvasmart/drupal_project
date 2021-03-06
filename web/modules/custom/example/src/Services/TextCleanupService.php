<?php

namespace Drupal\example\Services;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\FieldableEntityInterface;

use Drupal\example\TextCleanupPluginManager;

/**
 * Provides ways to clean up the text.
 */
class TextCleanupService {

  /**
   * Text cleanup plugin manager.
   *
   * @var \Drupal\example\TextCleanupPluginManager
   */
  private TextCleanupPluginManager $manager;

  /**
   * Config factory.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  private ConfigFactoryInterface $config;

  /**
   * Creates text cleanup service.
   *
   * @param \Drupal\example\TextCleanupPluginManager $manager
   *   Text cleanup plugin manager.
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config
   *   Config factory.
   */
  public function __construct(
    TextCleanupPluginManager $manager,
    ConfigFactoryInterface $config
  ) {
    $this->manager = $manager;
    $this->config = $config;
  }

  /**
   * Clean up the text.
   *
   * @param string $text
   *   The target text.
   *
   * @return string
   *   Cleaned up text.
   *
   * @throws \Drupal\Component\Plugin\Exception\PluginException
   */
  public function cleanUp(string $text): string {
    $pluginDefinitions = $this->manager->getDefinitions();
    $enabledPlugins = $this->config->get('example.text_cleanup.settings')
        ->get('plugins');
    foreach (array_filter($enabledPlugins) as $pluginId) {
      /** @var \Drupal\example\TextCleanupInterface $plugin */
      $plugin = $this->manager->createInstance($pluginId,
        $pluginDefinitions[$pluginId]);
      $text = $plugin->cleanUp($text);
    }
    return $text;
  }


  public function cleanUpEntity(FieldableEntityInterface $entity) {
    $storage = \Drupal::entityTypeManager()->getStorage('my_config_entity');
    $configs = $storage->loadByProperties(['type' => $entity->bundle()]);
    if (empty($configs)) {
      return;
    }
    /** @var \Drupal\example\BeetrootExampleInterface $config */
    $config = reset($configs);
    $plugins = $config->getPlugins();

    $pluginDefinitions = $this->manager->getDefinitions();
    foreach ($entity->getFields() as $field) {
      if ($field->getFieldDefinition()->getType() === 'text_long') {
        $value = $entity->get($field->getName())->value;
        foreach (array_filter($plugins) as $pluginId) {
          /** @var \Drupal\example\TextCleanupInterface $plugin */
          $plugin = $this->manager->createInstance($pluginId, $pluginDefinitions[$pluginId]);
          $value = $plugin->cleanUp($value);
        }
        $entity->set($field->getName(), $value);
      }
    }
  }

}