<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsStylesOffset>
*/
abstract class OffsetBase extends Builder {
  public function __construct()
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsStylesOffset::class, \Lenra\App\Response\View\Normalizer\ComponentsStylesOffsetNormalizer::class);
  }

  public function dx(float $dx): OffsetBase {
    $this->data->setDx(Builder::convert($dx));
    return $this;
  }

  public function dy(float $dy): OffsetBase {
    $this->data->setDy(Builder::convert($dy));
    return $this;
  }

}