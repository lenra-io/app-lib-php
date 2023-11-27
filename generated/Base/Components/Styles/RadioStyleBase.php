<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsStylesRadioStyle>
*/
abstract class RadioStyleBase extends Builder {
  public function __construct()
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsStylesRadioStyle::class);
  }

  public function activeColor(int $activeColor): self {
    $this->data->setActiveColor(Builder::convert($activeColor));
    return $this;
  }

  public function focusColor(int $focusColor): self {
    $this->data->setFocusColor(Builder::convert($focusColor));
    return $this;
  }

  public function hovercolor(int $hovercolor): self {
    $this->data->setHovercolor(Builder::convert($hovercolor));
    return $this;
  }

  public function unselectedColor(int $unselectedColor): self {
    $this->data->setUnselectedColor(Builder::convert($unselectedColor));
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

}
