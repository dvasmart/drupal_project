<?php

namespace Drupal\news_publishing\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for module.
 */
class NewsController extends ControllerBase 
{ 

  /**
   * Returns page with latest news.
   * @return array
   */
  public function newsLatest() 
  {
    $entity_type = 'node';

    $storage = \Drupal::entityTypeManager()->getStorage($entity_type);
    $lastIds = $storage->getQuery()->condition('status', 1)->condition('type', 'news')->sort('nid', 'DESC')->pager(1)->execute();

    $builder = \Drupal::entityTypeManager()->getViewBuilder($entity_type);
    $storage = \Drupal::entityTypeManager()->getStorage($entity_type);
    $node = $storage->load(reset($lastIds));
    $build = $builder->view($node, 'teaser');
    $output = render($build);

    return ['#markup' => $output];

  } 

}