<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsActionable>
*/
abstract class ActionableBase extends Builder {
  public function __construct($child)
  {
    parent::__construct('actionable', \Lenra\App\Response\View\Model\ComponentsActionable::class, \Lenra\App\Response\View\Normalizer\ComponentsActionableNormalizer::class);
    $this->child($child);
  }

  public function child($child): ActionableBase {
    $this->data->setChild(Builder::convert($child));
    return $this;
  }

  public function onPressed(\Lenra\App\Components\Listener $onPressed): ActionableBase {
    $this->data->setOnPressed(Builder::convert($onPressed));
    return $this;
  }

  public function onDoublePressed(\Lenra\App\Components\Listener $onDoublePressed): ActionableBase {
    $this->data->setOnDoublePressed(Builder::convert($onDoublePressed));
    return $this;
  }

  public function onLongPressed(\Lenra\App\Components\Listener $onLongPressed): ActionableBase {
    $this->data->setOnLongPressed(Builder::convert($onLongPressed));
    return $this;
  }

  public function onPressedCancel(\Lenra\App\Components\Listener $onPressedCancel): ActionableBase {
    $this->data->setOnPressedCancel(Builder::convert($onPressedCancel));
    return $this;
  }

  public function onHovered(\Lenra\App\Components\Listener $onHovered): ActionableBase {
    $this->data->setOnHovered(Builder::convert($onHovered));
    return $this;
  }

  public function submit(bool $submit): ActionableBase {
    $this->data->setSubmit(Builder::convert($submit));
    return $this;
  }

}