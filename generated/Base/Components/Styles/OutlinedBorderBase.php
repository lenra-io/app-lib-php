<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsStylesOutlinedBorder>
*/
abstract class OutlinedBorderBase extends Builder {
  public function __construct()
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsStylesOutlinedBorder::class);
  }

  public function side(\Lenra\App\Components\Styles\BorderSide $side): self {
    $this->data->setSide(Builder::convert($side));
    return $this;
  }

}
