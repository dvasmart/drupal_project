<?php

namespace Drupal\test_two\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;


/**
 * Provides a Test Two Module form.
 */
class EntityGenerationForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'test_two_entity_generation';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name of node'),
      '#required' => TRUE,
    ];

    $form['text'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Text in body'),
      '#required' => TRUE,
    ];

    $form['number'] = [
      '#title' => $this->t('Number of entities to generate'),
      '#type' => 'number',
      '#min' => 1,
      '#max' => 99,
      '#required' => TRUE,
    ];

    $form['actions'] = [
      '#type' => 'actions',
    ];
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Generate'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if ($form_state->getValue('number') > 100) {
      $form_state->setErrorByName('number', $this->t('Number should be maximum 100.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $number = $form_state->getValue('number');
    $params = [
      'type' => 'article',
      'title' => $form_state->getValue('name'),
      'body' => $form_state->getValue('text'),
    ];
    $operations = [];
    foreach (range(1, $number) as $i) {
      $arg1 = $params;
      $arg1['title'] .= ' - ' . $i;
      $operations[] = ['\Drupal\test_two\Form\EntityGenerationForm::createNode', [$arg1]];
    }
    batch_set([
      'title' => $this->t('Node article creation'),
      'operations' => $operations,
    ]);

    $this->messenger()->addStatus($this->t('The message has been sent.'));
    $form_state->setRedirect('<front>');
  }


  public static function createNode(array $params) {
    $node = Node::create($params);
    $node->save();
    \Drupal::messenger()->addStatus('Node added.');
  }

}
