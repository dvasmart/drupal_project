<?php

namespace Drupal\product_entity\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the product entity module entity edit forms.
 */
class ProductEntityModuleForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $result = parent::save($form, $form_state);

    $entity = $this->getEntity();

    $message_arguments = ['%label' => $entity->toLink()->toString()];
    $logger_arguments = [
      '%label' => $entity->label(),
      'link' => $entity->toLink($this->t('View'))->toString(),
    ];

    switch ($result) {
      case SAVED_NEW:
        $this->messenger()->addStatus($this->t('New product entity module %label has been created.', $message_arguments));
        $this->logger('product_entity')->notice('Created new product entity module %label', $logger_arguments);
        break;

      case SAVED_UPDATED:
        $this->messenger()->addStatus($this->t('The product entity module %label has been updated.', $message_arguments));
        $this->logger('product_entity')->notice('Updated product entity module %label.', $logger_arguments);
        break;
    }

    $form_state->setRedirect('entity.product_entity_module.canonical', ['product_entity_module' => $entity->id()]);

    return $result;
  }

}
