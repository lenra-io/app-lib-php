<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

abstract class ToggleBase extends Builder {
  public function __construct(bool $value)
  {
    parent::__construct('toggle');
    $this->value($value);
  }

  public function value(bool $value): self {
    $this->data['value'] = $value;
    return $this;
  }

  public function splashRadius(float $splashRadius): self {
    $this->data['splashRadius'] = $splashRadius;
    return $this;
  }

  public function autofocus(bool $autofocus): self {
    $this->data['autofocus'] = $autofocus;
    return $this;
  }

  public function dragStartBehavior(string $dragStartBehavior): self {
    $this->data['dragStartBehavior'] = $dragStartBehavior;
    return $this;
  }

  public function onPressed(\Lenra\App\Components\Listener $onPressed): self {
    $this->data['onPressed'] = $onPressed;
    return $this;
  }

  public function style(\Lenra\App\Components\Styles\ToggleStyle $style): self {
    $this->data['style'] = $style;
    return $this;
  }

  public function name(string $name): self {
    $this->data['name'] = $name;
    return $this;
  }

  public function disabled(bool $disabled): self {
    $this->data['disabled'] = $disabled;
    return $this;
  }

}