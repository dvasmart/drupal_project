<?php

namespace Drupal\news_publishing\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure settings for this news.
 */
class NewsOrderForm extends ConfigFormBase {

  /** 
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'news_publishing.settings';

  /** 
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'news_order_settings';
  }

  /** 
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  /** 
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);

    $form['news_sort_order'] = [
      '#type' => 'select',
      '#title' => $this->t('News order'),
      '#options' => ['asc', 'desc'],
      '#default_value' => $config->get('sort'),
      '#description' => $this->t('Choose in what order to display news on the page'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /** 
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve the configuration.
    $this->configFactory->getEditable(static::SETTINGS)
      // Set the submitted configuration setting.
      // You can set multiple configurations at once by making
      // multiple calls to set().
      ->set('sort', $form_state->getValue('news_sort_order'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}