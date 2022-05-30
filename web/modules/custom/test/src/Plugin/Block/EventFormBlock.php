<?php

namespace Drupal\test\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Block to show form for registration on custom event.
 *
 * @Block(
 *   id = "test_event_form_block",
 *   admin_label = @Translation("Block custom event form")
 * )
 */

class EventFormBlock extends BlockBase {

  /**
   * @inheritDoc
   */
  public function build() {
    $eventForm = \Drupal::formBuilder()->getForm('\Drupal\test\Form\EventForm');

    return $eventForm;
  }

}