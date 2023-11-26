<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsIcon>
*/
abstract class IconBase extends Builder {
  public function __construct(string $value)
  {
    parent::__construct('icon', \Lenra\App\Response\View\Model\ComponentsIcon::class, \Lenra\App\Response\View\Normalizer\ComponentsIconNormalizer::class);
    $this->value($value);
  }

  public function size(float $size): IconBase {
    $this->data->setSize(Builder::convert($size));
    return $this;
  }

  public function color(int $color): IconBase {
    $this->data->setColor(Builder::convert($color));
    return $this;
  }

  public function semanticLabel(string $semanticLabel): IconBase {
    $this->data->setSemanticLabel(Builder::convert($semanticLabel));
    return $this;
  }

  public function value(string $value): IconBase {
    $this->data->setValue(Builder::convert($value));
    return $this;
  }

  public function style(string $style): IconBase {
    $this->data->setStyle(Builder::convert($style));
    return $this;
  }

}