<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

abstract class TextInputTypeBase extends Builder {
  public function __construct()
  {
    parent::__construct();
  }

  public function copy(bool $copy): self {
    $this->data['copy'] = $copy;
    return $this;
  }

  public function cut(bool $cut): self {
    $this->data['cut'] = $cut;
    return $this;
  }

  public function paste(bool $paste): self {
    $this->data['paste'] = $paste;
    return $this;
  }

  public function selectAll(bool $selectAll): self {
    $this->data['selectAll'] = $selectAll;
    return $this;
  }

}
