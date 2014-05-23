<?php

namespace Drupal\diff\Controller;

use \Drupal\Core\Entity\RevisionableInterface;
use Drupal\Core\Controller\ControllerBase;


abstract class EntityComparisonBase extends ControllerBase {

  /**
   * @param RevisionableInterface $left
   * @param RevisionableInterface $right
   * @throws Exception
   */
  public function revisionsSupported(RevisionableInterface $left, RevisionableInterface $right) {
    if (!($left instanceof RevisionableInterface) || !($right instanceof RevisionableInterface)) {
      throw new Exception('Both entities must implement RevisionableInterface.');
    }
  }

  /**
   * @param RevisionableInterface $left
   * @param RevisionableInterface $right
   */
  public function compareRevisions(RevisionableInterface $left, RevisionableInterface $right) {

  }

} 