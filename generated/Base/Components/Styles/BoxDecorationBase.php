<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsStylesBoxDecoration>
*/
abstract class BoxDecorationBase extends Builder {
  public function __construct()
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsStylesBoxDecoration::class);
  }

  public function borderRadius(\Lenra\App\Components\Styles\BorderRadius $borderRadius): self {
    $this->data->setBorderRadius(Builder::convert($borderRadius));
    return $this;
  }

  public function boxShadow(\Lenra\App\Components\Styles\BoxShadow $boxShadow): self {
    $this->data->setBoxShadow(Builder::convert($boxShadow));
    return $this;
  }

  public function color(int $color): self {
    $this->data->setColor(Builder::convert($color));
    return $this;
  }

  public function shape(string $shape): self {
    $this->data->setShape(Builder::convert($shape));
    return $this;
  }

}
