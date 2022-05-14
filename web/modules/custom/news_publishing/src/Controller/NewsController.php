<?php

namespace Drupal\news_publishing\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for module.
 */
class NewsController extends ControllerBase 
{
  
  /**
   * Returns page with latest news
   * @return array
   */
  public function newsLatest() 
  {
    $entity_type = 'node';
    
    $storage = \Drupal::entityTypeManager()->getStorage($entity_type);
    $lastId = $storage->getQuery()->condition('status', 1)->condition('type', 'news')->sort('nid', 'DESC')->pager(1)->execute();    
    $storage = \Drupal::entityTypeManager()->getStorage($entity_type);
    $node = $storage->load(reset($lastId));
    $viewBuilder = \Drupal::entityTypeManager()->getViewBuilder($entity_type);
    $list = $viewBuilder->view($node, 'teaser');
    $result = render($list);

    return ['#markup' => $result];
  }

  /**
   * Returns page with news by id
   * @return array
   */
  public function newsByCategory($id) 
  {
    $news = [];
    $entity_type = 'node';

    $nodeStorage = \Drupal::entityTypeManager()->getStorage($entity_type);
    $id = $nodeStorage->getQuery()->condition('status', '1')->condition('type', 'news')->condition('field_term_reference', $id)->execute();
    $viewBuilder = \Drupal::entityTypeManager()->getViewBuilder($entity_type);

    $itemsStorage = \Drupal::entityTypeManager()->getStorage($entity_type);  
    foreach ($itemsStorage->loadMultiple($id) as $ids) {
      $news[] = $ids;
    }

    $list = $viewBuilder->viewMultiple($news, 'teaser');

    return $list;
  }

}