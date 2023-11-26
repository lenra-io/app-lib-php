<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsStylesTextInputType>
*/
abstract class TextInputTypeBase extends Builder {
  public function __construct()
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsStylesTextInputType::class);
  }

  public function copy(bool $copy): TextInputTypeBase {
    $this->data->setCopy(Builder::convert($copy));
    return $this;
  }

  public function cut(bool $cut): TextInputTypeBase {
    $this->data->setCut(Builder::convert($cut));
    return $this;
  }

  public function paste(bool $paste): TextInputTypeBase {
    $this->data->setPaste(Builder::convert($paste));
    return $this;
  }

  public function selectAll(bool $selectAll): TextInputTypeBase {
    $this->data->setSelectAll(Builder::convert($selectAll));
    return $this;
  }

}
