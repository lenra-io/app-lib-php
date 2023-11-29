<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsView>
*/
abstract class ViewBase extends Builder {
  public function __construct(string $name)
  {
    parent::__construct('view', \Lenra\App\Response\View\Model\ComponentsView::class);
    $this->name($name);
  }

  public function name(string $name): self {
    $this->data->setName(Builder::convert($name));
    return $this;
  }

  public function props($props): self {
    $this->data->setProps(Builder::convert($props));
    return $this;
  }

  public function find(\Lenra\App\Components\View\Definitions\Find $find): self {
    $this->data->setFind(Builder::convert($find));
    return $this;
  }

  public function context($context): self {
    $this->data->setContext(Builder::convert($context));
    return $this;
  }

}