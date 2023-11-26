<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsMenu>
*/
abstract class MenuBase extends Builder {
  public function __construct(array $children)
  {
    parent::__construct('menu', \Lenra\App\Response\View\Model\ComponentsMenu::class, \Lenra\App\Response\View\Normalizer\ComponentsMenuNormalizer::class);
    $this->children($children);
  }

  public function children(array $children): MenuBase {
    $this->data->setChildren(Builder::convert($children));
    return $this;
  }

}
