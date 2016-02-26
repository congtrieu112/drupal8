<?php
namespace Drupal\block_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Hello' Block
 *
 * @Block(
 * id = "hello_block",
 * admin_label = @Translation("Hello block"),
 * )
 */
class HelloBlock extends BlockBase implements BlockPluginInterface {

  /**
   * {@inheritdoc}
   */
  public function build() {
//    return array(
//      '#markup' => $this->t('Hello, World!'),
//    );
//    $default_form = \Drupal::config('contact.settings')->get('example_form');
//    $entity = \Drupal::entityManager()->getStorage('contact_form')->load($default_form);
//
//    $message = \Drupal::entityManager()
//      ->getStorage('contact_message')
//      ->create(array(
//        'contact_form' => $entity->id(),
//      ));
//
//    $form = \Drupal::service('entity.form_builder')->getForm($message);
    $form = \Drupal::formBuilder()->getForm('Drupal\validate\Form\ExampleForm');

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);

    $config = $this->getConfiguration();

      $form['title'] = array(
      '#type' => 'textfield',
      '#title' => t('Title'),
      '#required' => TRUE,
    );
    $form['video'] = array(
      '#type' => 'textfield',
      '#title' => t('Youtube video'),
    );
    $form['video'] = array(
      '#type' => 'textfield',
      '#title' => t('Youtube video'),
    );
    $form['develop'] = array(
      '#type' => 'checkbox',
      '#title' => t('I would like to be involved in developing this material'),
    );
    $form['description'] = array(
      '#type' => 'textarea',
      '#title' => t('Description'),
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Submit'),
    );

    return $form;
  }
}
