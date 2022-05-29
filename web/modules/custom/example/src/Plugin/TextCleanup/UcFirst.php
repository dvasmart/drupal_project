<?php

namespace Drupal\example\Plugin\TextCleanup;

use Drupal\example\TextCleanupPluginBase;

/**
 * Plugin implementation of the text_cleanup.
 *
 * @TextCleanup(
 *   id = "uc_first",
 *   label = @Translation("UC First"),
 *   description = @Translation("Upper case first character in each line.")
 * )
 */
class UcFirst extends TextCleanupPluginBase {

  /**
   * {@inheritdoc}
   */
  public function cleanUp(string $text): string {
    $lines = explode("\n", $text);
    foreach ($lines as &$line) {
      $line = ucfirst($line);
    }
    return implode("\n", $lines);
  }

}