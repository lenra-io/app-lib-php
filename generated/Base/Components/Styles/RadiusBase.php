<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

abstract class RadiusBase extends Builder {
  public function __construct()
  {
    parent::__construct();
  }

  public function x(float $x): self {
    $this->data['x'] = $x;
    return $this;
  }

  public function y(float $y): self {
    $this->data['y'] = $y;
    return $this;
  }

}
