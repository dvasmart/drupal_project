<?php

namespace Drupal\test_one\Plugin\QueueWorker;

use Drupal\Core\Queue\QueueWorkerBase;
use Drupal\node\Entity\Node;

/**
 * Defines 'admin_notify_worker' queue worker.
 *
 * @QueueWorker(
 *   id = "admin_notify_worker",
 *   title = @Translation("AdminNotify"),
 *   cron = {"time" = 60}
 * )
 */
class AdminNotifyWorker extends QueueWorkerBase {

  /**
   * {@inheritdoc}
   */
  public function processItem($id) {
    $node = Node::load($id);
    // @todo Process data here.
  }

}
