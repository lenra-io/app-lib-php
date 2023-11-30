<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

abstract class FlexBase extends Builder {
  public function __construct(array $children)
  {
    parent::__construct('flex');
    $this->children($children);
  }

  public function children(array $children): self {
    $this->data['children'] = $children;
    return $this;
  }

  public function direction(string $direction): self {
    $this->data['direction'] = $direction;
    return $this;
  }

  public function mainAxisAlignment(string $mainAxisAlignment): self {
    $this->data['mainAxisAlignment'] = $mainAxisAlignment;
    return $this;
  }

  public function crossAxisAlignment(string $crossAxisAlignment): self {
    $this->data['crossAxisAlignment'] = $crossAxisAlignment;
    return $this;
  }

  public function spacing(float $spacing): self {
    $this->data['spacing'] = $spacing;
    return $this;
  }

  public function fillParent(bool $fillParent): self {
    $this->data['fillParent'] = $fillParent;
    return $this;
  }

  public function scroll(bool $scroll): self {
    $this->data['scroll'] = $scroll;
    return $this;
  }

  public function padding(\Lenra\App\Components\Styles\Padding $padding): self {
    $this->data['padding'] = $padding;
    return $this;
  }

  public function horizontalDirection(string $horizontalDirection): self {
    $this->data['horizontalDirection'] = $horizontalDirection;
    return $this;
  }

  public function verticalDirection(string $verticalDirection): self {
    $this->data['verticalDirection'] = $verticalDirection;
    return $this;
  }

  public function textBaseline(string $textBaseline): self {
    $this->data['textBaseline'] = $textBaseline;
    return $this;
  }

}