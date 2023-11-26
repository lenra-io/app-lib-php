<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsStylesPadding>
*/
abstract class PaddingBase extends Builder {
  public function __construct()
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsStylesPadding::class, \Lenra\App\Response\View\Normalizer\ComponentsStylesPaddingNormalizer::class);
  }

  public function top(float $top): PaddingBase {
    $this->data->setTop(Builder::convert($top));
    return $this;
  }

  public function left(float $left): PaddingBase {
    $this->data->setLeft(Builder::convert($left));
    return $this;
  }

  public function bottom(float $bottom): PaddingBase {
    $this->data->setBottom(Builder::convert($bottom));
    return $this;
  }

  public function right(float $right): PaddingBase {
    $this->data->setRight(Builder::convert($right));
    return $this;
  }

}