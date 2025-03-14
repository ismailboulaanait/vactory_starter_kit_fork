<?php

namespace Drupal\vactory_header\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\Cache;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a "Vactory Header Block 5" block.
 *
 * @Block(
 *   id = "vactory_header_block5",
 *   admin_label = @Translation("Vactory Header Block V5"),
 *   category = @Translation("Headers")
 * )
 */
class VactoryHeaderBlock5 extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    return [
      "#theme" => "block_vactory_header5",
    ];

  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $config = \Drupal::service('config.factory')
      ->getEditable('vactory_header.settings');
    $config->set('variante_number', 5)->save();
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheMaxAge() {
    return Cache::PERMANENT;
  }

}
