<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsContainer>
*/
abstract class ContainerBase extends Builder {
  public function __construct()
  {
    parent::__construct('container', \Lenra\App\Response\View\Model\ComponentsContainer::class);
  }

  public function child($child): self {
    $this->data->setChild(Builder::convert($child));
    return $this;
  }

  public function alignment(string $alignment): self {
    $this->data->setAlignment(Builder::convert($alignment));
    return $this;
  }

  public function border(\Lenra\App\Components\Styles\Border $border): self {
    $this->data->setBorder(Builder::convert($border));
    return $this;
  }

  public function padding(\Lenra\App\Components\Styles\Padding $padding): self {
    $this->data->setPadding(Builder::convert($padding));
    return $this;
  }

  public function constraints(\Lenra\App\Components\Styles\BoxConstraints $constraints): self {
    $this->data->setConstraints(Builder::convert($constraints));
    return $this;
  }

  public function decoration(\Lenra\App\Components\Styles\BoxDecoration $decoration): self {
    $this->data->setDecoration(Builder::convert($decoration));
    return $this;
  }

}