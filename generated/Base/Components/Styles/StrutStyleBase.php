<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsStylesStrutStyle>
*/
abstract class StrutStyleBase extends Builder {
  public function __construct()
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsStylesStrutStyle::class, \Lenra\App\Response\View\Normalizer\ComponentsStylesStrutStyleNormalizer::class);
  }

  public function debugLabel(string $debugLabel): StrutStyleBase {
    $this->data->setDebugLabel(Builder::convert($debugLabel));
    return $this;
  }

  public function fontFamily(string $fontFamily): StrutStyleBase {
    $this->data->setFontFamily(Builder::convert($fontFamily));
    return $this;
  }

  public function fontFamilyFallback(array $fontFamilyFallback): StrutStyleBase {
    $this->data->setFontFamilyFallback(Builder::convert($fontFamilyFallback));
    return $this;
  }

  public function fontSize(float $fontSize): StrutStyleBase {
    $this->data->setFontSize(Builder::convert($fontSize));
    return $this;
  }

  public function fontWeight(string $fontWeight): StrutStyleBase {
    $this->data->setFontWeight(Builder::convert($fontWeight));
    return $this;
  }

  public function forceStrutHeight(bool $forceStrutHeight): StrutStyleBase {
    $this->data->setForceStrutHeight(Builder::convert($forceStrutHeight));
    return $this;
  }

  public function height(float $height): StrutStyleBase {
    $this->data->setHeight(Builder::convert($height));
    return $this;
  }

  public function leading(float $leading): StrutStyleBase {
    $this->data->setLeading(Builder::convert($leading));
    return $this;
  }

  public function leadingDistribution(string $leadingDistribution): StrutStyleBase {
    $this->data->setLeadingDistribution(Builder::convert($leadingDistribution));
    return $this;
  }

}