<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

abstract class CarouselOptionsBase extends Builder {
  public function __construct()
  {
    parent::__construct();
  }

  public function height(float $height): self {
    $this->data['height'] = $height;
    return $this;
  }

  public function enlargeCenterPage(bool $enlargeCenterPage): self {
    $this->data['enlargeCenterPage'] = $enlargeCenterPage;
    return $this;
  }

  public function autoPlay(bool $autoPlay): self {
    $this->data['autoPlay'] = $autoPlay;
    return $this;
  }

  public function autoPlayInterval(\Lenra\App\Components\Styles\Duration $autoPlayInterval): self {
    $this->data['autoPlayInterval'] = $autoPlayInterval;
    return $this;
  }

  public function autoPlayAnimationDuration(\Lenra\App\Components\Styles\Duration $autoPlayAnimationDuration): self {
    $this->data['autoPlayAnimationDuration'] = $autoPlayAnimationDuration;
    return $this;
  }

  public function pauseAutoPlayOnTouch(bool $pauseAutoPlayOnTouch): self {
    $this->data['pauseAutoPlayOnTouch'] = $pauseAutoPlayOnTouch;
    return $this;
  }

  public function aspectRatio(float $aspectRatio): self {
    $this->data['aspectRatio'] = $aspectRatio;
    return $this;
  }

  public function initialPage(int $initialPage): self {
    $this->data['initialPage'] = $initialPage;
    return $this;
  }

  public function enableInfiniteScroll(bool $enableInfiniteScroll): self {
    $this->data['enableInfiniteScroll'] = $enableInfiniteScroll;
    return $this;
  }

  public function reverse(bool $reverse): self {
    $this->data['reverse'] = $reverse;
    return $this;
  }

  public function scrollDirection(string $scrollDirection): self {
    $this->data['scrollDirection'] = $scrollDirection;
    return $this;
  }

  public function viewportFraction(float $viewportFraction): self {
    $this->data['viewportFraction'] = $viewportFraction;
    return $this;
  }

  public function enlargeStrategy(string $enlargeStrategy): self {
    $this->data['enlargeStrategy'] = $enlargeStrategy;
    return $this;
  }

}