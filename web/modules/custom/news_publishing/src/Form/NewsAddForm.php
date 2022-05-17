<?php

namespace Drupal\news_publishing\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;

/**
 * Class NewsAddForm for adding news by using form.
 */
class NewsAddForm extends FormBase {

  /**
   * Returns a unique string identifying the form.
   *
   * The returned ID should be a unique string that can be a valid PHP function
   * name, since it's used in hook implementation names such as
   * hook_form_FORM_ID_alter().
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'news_adding_form';
  }

  /**
   * Form constructor.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The form structure.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $storageCategory = \Drupal::entityTypeManager()->getStorage('taxonomy_term');
    $id = $storageCategory->getQuery()->condition('vid', 'tags')->execute();

    $category = [];
    foreach ($storageCategory->loadMultiple($id) as $item) {
      $category[$item->id()] = $item->label();
    }

    $form['title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Title'),
      '#description' => $this->t('Enter the title of news. Note that the title 
must be at least 10 characters in length'),
      '#required' => TRUE,
    ];

    $form['body'] = [
      '#type' => 'text_format',
      '#title' => $this->t('Main text'),
      '#description' => $this->t('Enter the main body of news. Note that the 
title must be at least 10 characters in length'),
      '#required' => TRUE,
      '#format' => 'basic_html',
      '#default_value' => '<p>This is default news string</p>',
    ];

    $form['field_term_reference'] = [
      '#type' => 'select',
      '#title' => $this->t('Category'),
      '#options' => $category,
    ];

    // Group submit handlers in an actions element with a key of "actions" so
    // that it gets styled correctly, and so that other modules may add actions
    // to the form. This is not required, but is convention.
    $form['actions'] = [
      '#type' => 'actions',
    ];

    // Add a submit button that handles the submission of the form.
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Add News'),
    ];

    return $form;
  }

  /**
   * Validate the title and the checkbox of the form.
   *
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);

    $title = $form_state->getValue('title');
    $body = $form_state->getValue('body');

    if (strlen($title) < 10 || strlen($body['value']) < 10) {
      // Set an error for the form element with a key of "title".
      $form_state->setErrorByName('title', $this->t('This field must be at least 
10 characters long.'));
    }

  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $body = $form_state->getValue('body')['value'];
    $body = check_markup($body, 'basic_html');
    $news = Node::create([
      'type' => 'news',
      'title' => $form_state->getValue('title'),
      'body' => ['value' => $body],
      'field_category' => $form_state->getValue('category'),
      'uid' => \Drupal::currentUser()->id(),
    ]);
    $news->setUnpublished();
    $news->save();

    // Call the Static Service Container wrapper
    // We should inject the messenger service, but its beyond the scope of this
    // example.
    $message = \Drupal::messenger();
    $message->addMessage('News with id ' . $news->id() . ' was created and now 
waiting for publishing');

    // Redirect to home.
    $form_state->setRedirect('<front>');
  }

}
