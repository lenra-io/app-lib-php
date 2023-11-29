<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsStylesTextFieldStyle>
*/
abstract class TextFieldStyleBase extends Builder {
  public function __construct()
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsStylesTextFieldStyle::class);
  }

  public function cursorColor(int $cursorColor): self {
    $this->data->setCursorColor(Builder::convert($cursorColor));
    return $this;
  }

  public function cursorHeight(float $cursorHeight): self {
    $this->data->setCursorHeight(Builder::convert($cursorHeight));
    return $this;
  }

  public function cursorRadius(\Lenra\App\Components\Styles\Radius $cursorRadius): self {
    $this->data->setCursorRadius(Builder::convert($cursorRadius));
    return $this;
  }

  public function cursorWidth(float $cursorWidth): self {
    $this->data->setCursorWidth(Builder::convert($cursorWidth));
    return $this;
  }

  public function decoration(\Lenra\App\Components\Styles\InputDecoration $decoration): self {
    $this->data->setDecoration(Builder::convert($decoration));
    return $this;
  }

  public function keyboardAppearance(string $keyboardAppearance): self {
    $this->data->setKeyboardAppearance(Builder::convert($keyboardAppearance));
    return $this;
  }

  public function obscuringCharacter(string $obscuringCharacter): self {
    $this->data->setObscuringCharacter(Builder::convert($obscuringCharacter));
    return $this;
  }

  public function scrollPadding(\Lenra\App\Components\Styles\Padding $scrollPadding): self {
    $this->data->setScrollPadding(Builder::convert($scrollPadding));
    return $this;
  }

  public function selectionHeightStyle(string $selectionHeightStyle): self {
    $this->data->setSelectionHeightStyle(Builder::convert($selectionHeightStyle));
    return $this;
  }

  public function selectionWidthStyle(string $selectionWidthStyle): self {
    $this->data->setSelectionWidthStyle(Builder::convert($selectionWidthStyle));
    return $this;
  }

  public function strutStyle(\Lenra\App\Components\Styles\StrutStyle $strutStyle): self {
    $this->data->setStrutStyle(Builder::convert($strutStyle));
    return $this;
  }

  public function textStyle(\Lenra\App\Components\Styles\TextStyle $textStyle): self {
    $this->data->setTextStyle(Builder::convert($textStyle));
    return $this;
  }

  public function textAlign(string $textAlign): self {
    $this->data->setTextAlign(Builder::convert($textAlign));
    return $this;
  }

  public function textAlignVertical(string $textAlignVertical): self {
    $this->data->setTextAlignVertical(Builder::convert($textAlignVertical));
    return $this;
  }

}