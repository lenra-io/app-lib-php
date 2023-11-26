<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsStylesToolbarOptions>
*/
abstract class ToolbarOptionsBase extends Builder {
  public function __construct()
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsStylesToolbarOptions::class);
  }

  public function decimal(bool $decimal): ToolbarOptionsBase {
    $this->data->setDecimal(Builder::convert($decimal));
    return $this;
  }

  public function signed(bool $signed): ToolbarOptionsBase {
    $this->data->setSigned(Builder::convert($signed));
    return $this;
  }

}
