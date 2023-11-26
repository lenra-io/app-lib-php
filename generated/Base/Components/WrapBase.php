<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsWrap>
*/
abstract class WrapBase extends Builder {
  public function __construct(array $children)
  {
    parent::__construct('wrap', \Lenra\App\Response\View\Model\ComponentsWrap::class);
    $this->children($children);
  }

  public function children(array $children): WrapBase {
    $this->data->setChildren(Builder::convert($children));
    return $this;
  }

  public function direction(string $direction): WrapBase {
    $this->data->setDirection(Builder::convert($direction));
    return $this;
  }

  public function crossAxisAlignment(string $crossAxisAlignment): WrapBase {
    $this->data->setCrossAxisAlignment(Builder::convert($crossAxisAlignment));
    return $this;
  }

  public function spacing(float $spacing): WrapBase {
    $this->data->setSpacing(Builder::convert($spacing));
    return $this;
  }

  public function runSpacing(float $runSpacing): WrapBase {
    $this->data->setRunSpacing(Builder::convert($runSpacing));
    return $this;
  }

  public function alignment(string $alignment): WrapBase {
    $this->data->setAlignment(Builder::convert($alignment));
    return $this;
  }

  public function runAlignment(string $runAlignment): WrapBase {
    $this->data->setRunAlignment(Builder::convert($runAlignment));
    return $this;
  }

  public function horizontalDirection(string $horizontalDirection): WrapBase {
    $this->data->setHorizontalDirection(Builder::convert($horizontalDirection));
    return $this;
  }

  public function verticalDirection(string $verticalDirection): WrapBase {
    $this->data->setVerticalDirection(Builder::convert($verticalDirection));
    return $this;
  }

}
