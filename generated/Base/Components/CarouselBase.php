<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

abstract class CarouselBase extends Builder {
  public function __construct(array $children)
  {
    parent::__construct('carousel');
    $this->children($children);
  }

  public function children(array $children): self {
    $this->data['children'] = $children;
    return $this;
  }

  public function options(\Lenra\App\Components\Styles\CarouselOptions $options): self {
    $this->data['options'] = $options;
    return $this;
  }

}
