<?php

namespace Drupal\example\Plugin\TextCleanup;

use Drupal\example\TextCleanupPluginBase;

/**
 * Plugin implementation of the text_cleanup.
 *
 * @TextCleanup(
 *   id = "remove_bad_words",
 *   label = @Translation("Remove Bad Words"),
 *   description = @Translation("Removes bad words from the text")
 * )
 */
class RemoveBadWords extends TextCleanupPluginBase {

  /**
   * {@inheritdoc}
   */
  public function cleanUp(string $text): string {
    $words = ['bad-word'];
    $replace = ['*****'];
    return str_replace($words, $replace, $text);
  }

}