<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

abstract class ViewBase extends Builder {
  public function __construct(string $name)
  {
    parent::__construct('view');
    $this->name($name);
  }

  public function name(string $name): self {
    $this->data['name'] = $name;
    return $this;
  }

  public function props($props): self {
    $this->data['props'] = $props;
    return $this;
  }

  public function find(\Lenra\App\Components\View\Definitions\Find $find): self {
    $this->data['find'] = $find;
    return $this;
  }

  public function context($context): self {
    $this->data['context'] = $context;
    return $this;
  }

}