<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsStylesCheckboxStyle>
*/
abstract class CheckboxStyleBase extends Builder {
  public function __construct()
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsStylesCheckboxStyle::class);
  }

  public function activeColor(int $activeColor): self {
    $this->data->setActiveColor(Builder::convert($activeColor));
    return $this;
  }

  public function checkColor(int $checkColor): self {
    $this->data->setCheckColor(Builder::convert($checkColor));
    return $this;
  }

  public function focusColor(int $focusColor): self {
    $this->data->setFocusColor(Builder::convert($focusColor));
    return $this;
  }

  public function hoverColor(int $hoverColor): self {
    $this->data->setHoverColor(Builder::convert($hoverColor));
    return $this;
  }

  public function splashRadius(float $splashRadius): self {
    $this->data->setSplashRadius(Builder::convert($splashRadius));
    return $this;
  }

  public function visualDensity(string $visualDensity): self {
    $this->data->setVisualDensity(Builder::convert($visualDensity));
    return $this;
  }

  public function shape(\Lenra\App\Components\Styles\OutlinedBorder $shape): self {
    $this->data->setShape(Builder::convert($shape));
    return $this;
  }

  public function side(\Lenra\App\Components\Styles\BorderSide $side): self {
    $this->data->setSide(Builder::convert($side));
    return $this;
  }

}
