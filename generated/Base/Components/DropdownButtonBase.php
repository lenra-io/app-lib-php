<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsDropdownButton>
*/
abstract class DropdownButtonBase extends Builder {
  public function __construct(string $text ,$child)
  {
    parent::__construct('dropdownButton', \Lenra\App\Response\View\Model\ComponentsDropdownButton::class);
    $this->text($text);
    $this->child($child);
  }

  public function text(string $text): self {
    $this->data->setText(Builder::convert($text));
    return $this;
  }

  public function disabled(bool $disabled): self {
    $this->data->setDisabled(Builder::convert($disabled));
    return $this;
  }

  public function size(string $size): self {
    $this->data->setSize(Builder::convert($size));
    return $this;
  }

  public function mainStyle(string $mainStyle): self {
    $this->data->setMainStyle(Builder::convert($mainStyle));
    return $this;
  }

  public function child($child): self {
    $this->data->setChild(Builder::convert($child));
    return $this;
  }

  public function icon(\Lenra\App\Components\Icon $icon): self {
    $this->data->setIcon(Builder::convert($icon));
    return $this;
  }

}
