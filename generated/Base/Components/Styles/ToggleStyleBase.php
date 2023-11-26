<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsStylesToggleStyle>
*/
abstract class ToggleStyleBase extends Builder {
  public function __construct()
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsStylesToggleStyle::class);
  }

  public function activeColor(int $activeColor): ToggleStyleBase {
    $this->data->setActiveColor(Builder::convert($activeColor));
    return $this;
  }

  public function activeTrackColor(int $activeTrackColor): ToggleStyleBase {
    $this->data->setActiveTrackColor(Builder::convert($activeTrackColor));
    return $this;
  }

  public function inactiveTrackColor(int $inactiveTrackColor): ToggleStyleBase {
    $this->data->setInactiveTrackColor(Builder::convert($inactiveTrackColor));
    return $this;
  }

  public function inactiveThumbColor(int $inactiveThumbColor): ToggleStyleBase {
    $this->data->setInactiveThumbColor(Builder::convert($inactiveThumbColor));
    return $this;
  }

  public function hoverColor(int $hoverColor): ToggleStyleBase {
    $this->data->setHoverColor(Builder::convert($hoverColor));
    return $this;
  }

  public function focusColor(int $focusColor): ToggleStyleBase {
    $this->data->setFocusColor(Builder::convert($focusColor));
    return $this;
  }

  public function activeThumbImage(\Lenra\App\Components\Image $activeThumbImage): ToggleStyleBase {
    $this->data->setActiveThumbImage(Builder::convert($activeThumbImage));
    return $this;
  }

  public function inactiveThumbImage(\Lenra\App\Components\Image $inactiveThumbImage): ToggleStyleBase {
    $this->data->setInactiveThumbImage(Builder::convert($inactiveThumbImage));
    return $this;
  }

  public function materialTapTargetSize(string $materialTapTargetSize): ToggleStyleBase {
    $this->data->setMaterialTapTargetSize(Builder::convert($materialTapTargetSize));
    return $this;
  }

}
