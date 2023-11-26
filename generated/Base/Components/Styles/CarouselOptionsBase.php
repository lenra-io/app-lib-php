<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsStylesCarouselOptions>
*/
abstract class CarouselOptionsBase extends Builder {
  public function __construct()
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsStylesCarouselOptions::class, \Lenra\App\Response\View\Normalizer\ComponentsStylesCarouselOptionsNormalizer::class);
  }

  public function height(float $height): CarouselOptionsBase {
    $this->data->setHeight(Builder::convert($height));
    return $this;
  }

  public function enlargeCenterPage(bool $enlargeCenterPage): CarouselOptionsBase {
    $this->data->setEnlargeCenterPage(Builder::convert($enlargeCenterPage));
    return $this;
  }

  public function autoPlay(bool $autoPlay): CarouselOptionsBase {
    $this->data->setAutoPlay(Builder::convert($autoPlay));
    return $this;
  }

  public function autoPlayInterval(\Lenra\App\Components\Styles\Duration $autoPlayInterval): CarouselOptionsBase {
    $this->data->setAutoPlayInterval(Builder::convert($autoPlayInterval));
    return $this;
  }

  public function autoPlayAnimationDuration(\Lenra\App\Components\Styles\Duration $autoPlayAnimationDuration): CarouselOptionsBase {
    $this->data->setAutoPlayAnimationDuration(Builder::convert($autoPlayAnimationDuration));
    return $this;
  }

  public function pauseAutoPlayOnTouch(bool $pauseAutoPlayOnTouch): CarouselOptionsBase {
    $this->data->setPauseAutoPlayOnTouch(Builder::convert($pauseAutoPlayOnTouch));
    return $this;
  }

  public function aspectRatio(float $aspectRatio): CarouselOptionsBase {
    $this->data->setAspectRatio(Builder::convert($aspectRatio));
    return $this;
  }

  public function initialPage(int $initialPage): CarouselOptionsBase {
    $this->data->setInitialPage(Builder::convert($initialPage));
    return $this;
  }

  public function enableInfiniteScroll(bool $enableInfiniteScroll): CarouselOptionsBase {
    $this->data->setEnableInfiniteScroll(Builder::convert($enableInfiniteScroll));
    return $this;
  }

  public function reverse(bool $reverse): CarouselOptionsBase {
    $this->data->setReverse(Builder::convert($reverse));
    return $this;
  }

  public function scrollDirection(string $scrollDirection): CarouselOptionsBase {
    $this->data->setScrollDirection(Builder::convert($scrollDirection));
    return $this;
  }

  public function viewportFraction(float $viewportFraction): CarouselOptionsBase {
    $this->data->setViewportFraction(Builder::convert($viewportFraction));
    return $this;
  }

  public function enlargeStrategy(string $enlargeStrategy): CarouselOptionsBase {
    $this->data->setEnlargeStrategy(Builder::convert($enlargeStrategy));
    return $this;
  }

}
