<?php

/**
 * @file
 * Post update scripts.
 */

use Drupal\node\Entity\Node;

/**
 * Add new custom page.
 */
function product_entity_post_update_create_some_page(&$sandbox) {
  Node::create(
    [
      'type' => 'page',
      'title' => 'Some page',
      'status' => 1,
    ]
  )->save();
  \Drupal::messenger()->addMessage('Added Some page.');
}

