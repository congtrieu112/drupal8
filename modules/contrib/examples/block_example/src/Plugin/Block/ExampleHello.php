<?php


/**
 * @file
 * Contains \Drupal\block_example\Plugin\Block\ExampleHello.
 */

namespace Drupal\block_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Example: uppercase this please' block.
 *
 * @Block(
 *   id = "example_hello",
 *   admin_label = @Translation("Example: hello")
 * )
 */
class ExampleHello extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t("hello"),
    );
  }

}
