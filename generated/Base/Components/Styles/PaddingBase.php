<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

abstract class PaddingBase extends Builder {
  public function __construct()
  {
    parent::__construct();
  }

  public function top(float $top): self {
    $this->data['top'] = $top;
    return $this;
  }

  public function left(float $left): self {
    $this->data['left'] = $left;
    return $this;
  }

  public function bottom(float $bottom): self {
    $this->data['bottom'] = $bottom;
    return $this;
  }

  public function right(float $right): self {
    $this->data['right'] = $right;
    return $this;
  }

}
