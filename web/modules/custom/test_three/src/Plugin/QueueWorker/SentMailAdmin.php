<?php

namespace Drupal\test_three\Plugin\QueueWorker;

use Drupal\Core\Queue\QueueWorkerBase;
use Drupal\node\Entity\Node;

/**
 * Defines 'sent_mail_admin' queue worker.
 *
 * @QueueWorker(
 *   id = "sent_mail_admin",
 *   title = @Translation("SentMailAdmin"),
 *   cron = {"time" = 60}
 * )
 */
class SentMailAdmin extends QueueWorkerBase {

  /**
   * {@inheritdoc}
   */
  public function processItem($id) {
    /** @var \Drupal\Core\Mail\MailManagerInterface $mailManager */    
    $user = Node::load($id);
    // @todo Send emails    
  }

}
