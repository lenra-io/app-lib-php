<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsStylesTextStyle>
*/
abstract class TextStyleBase extends Builder {
  public function __construct()
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsStylesTextStyle::class, \Lenra\App\Response\View\Normalizer\ComponentsStylesTextStyleNormalizer::class);
  }

  public function color(int $color): TextStyleBase {
    $this->data->setColor(Builder::convert($color));
    return $this;
  }

  public function decoration(string $decoration): TextStyleBase {
    $this->data->setDecoration(Builder::convert($decoration));
    return $this;
  }

  public function decorationColor(int $decorationColor): TextStyleBase {
    $this->data->setDecorationColor(Builder::convert($decorationColor));
    return $this;
  }

  public function decorationStyle(string $decorationStyle): TextStyleBase {
    $this->data->setDecorationStyle(Builder::convert($decorationStyle));
    return $this;
  }

  public function decorationThickness(float $decorationThickness): TextStyleBase {
    $this->data->setDecorationThickness(Builder::convert($decorationThickness));
    return $this;
  }

  public function fontFamily(string $fontFamily): TextStyleBase {
    $this->data->setFontFamily(Builder::convert($fontFamily));
    return $this;
  }

  public function fontFamilyFallback(array $fontFamilyFallback): TextStyleBase {
    $this->data->setFontFamilyFallback(Builder::convert($fontFamilyFallback));
    return $this;
  }

  public function fontSize(float $fontSize): TextStyleBase {
    $this->data->setFontSize(Builder::convert($fontSize));
    return $this;
  }

  public function fontStyle(string $fontStyle): TextStyleBase {
    $this->data->setFontStyle(Builder::convert($fontStyle));
    return $this;
  }

  public function fontWeight(string $fontWeight): TextStyleBase {
    $this->data->setFontWeight(Builder::convert($fontWeight));
    return $this;
  }

  public function height(float $height): TextStyleBase {
    $this->data->setHeight(Builder::convert($height));
    return $this;
  }

  public function letterSpacing(float $letterSpacing): TextStyleBase {
    $this->data->setLetterSpacing(Builder::convert($letterSpacing));
    return $this;
  }

  public function overflow(string $overflow): TextStyleBase {
    $this->data->setOverflow(Builder::convert($overflow));
    return $this;
  }

  public function shadows(array $shadows): TextStyleBase {
    $this->data->setShadows(Builder::convert($shadows));
    return $this;
  }

  public function textBaseline(string $textBaseline): TextStyleBase {
    $this->data->setTextBaseline(Builder::convert($textBaseline));
    return $this;
  }

  public function wordSpacing(float $wordSpacing): TextStyleBase {
    $this->data->setWordSpacing(Builder::convert($wordSpacing));
    return $this;
  }

}
