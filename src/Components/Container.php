<?php
// This file is auto-generated by generate-classes.php but it can be edited

namespace Lenra\App\Components;

use Lenra\App\Components\Styles\Border;
use Lenra\App\Components\Styles\BorderRadius;
use Lenra\App\Components\Styles\BorderSide;
use Lenra\App\Components\Styles\BoxShadow;
use Lenra\App\Components\Styles\Colors;
use Lenra\App\Components\Styles\Offset;
use Lenra\App\Components\Styles\Padding;

class Container extends \Lenra\App\Base\Components\ContainerBase {
  // Add here custom implementations

  // Constraints
  protected function initConstraints() {
    if (!$this->data->isInitialized('constraints')) {
      $this->data->setConstraints(new \Lenra\App\Response\View\Model\ComponentsStylesBoxConstraints());
    }
    return $this->data->getConstraints();
  }
  public function width($width): self {
    $constraints = $this->initConstraints();
    $constraints->setMinWidth($width);
    $constraints->setMaxWidth($width);
    return $this;
  }
  public function minWidth($width): self {
    $constraints = $this->initConstraints();
    $constraints->setMinWidth($width);
    return $this;
  }
  public function maxWidth($width): self {
    $constraints = $this->initConstraints();
    $constraints->setMaxWidth($width);
    return $this;
  }
  public function height($height): self {
    $constraints = $this->initConstraints();
    $constraints->setMinHeight($height);
    $constraints->setMaxHeight($height);
    return $this;
  }
  public function minHeight($height): self {
    $constraints = $this->initConstraints();
    $constraints->setMinHeight($height);
    return $this;
  }
  public function maxHeight($height): self {
    $constraints = $this->initConstraints();
    $constraints->setMaxHeight($height);
    return $this;
  }

  // Decoration
  protected function initDecoration() {
    if (!$this->data->isInitialized('decoration')) {
      $this->data->setDecoration(new \Lenra\App\Response\View\Model\ComponentsStylesBoxDecoration());
    }
    return $this->data->getDecoration();
  }
  public function borderRadius(BorderRadius $borderRadius): self {
    $decoration = $this->initDecoration();
    $decoration->setBorderRadius($borderRadius->data);
    return $this;
  }
  public function boxShadow(BoxShadow $boxShadow): self {
    $decoration = $this->initDecoration();
    $decoration->setBoxShadow($boxShadow->data);
    return $this;
  }
  public function color(int $color): self {
    $decoration = $this->initDecoration();
    $decoration->setColor($color);
    return $this;
  }
  public function shape(string $shape): self {
    $decoration = $this->initDecoration();
    $decoration->setShape($shape);
    return $this;
  }

  public static function card($child = null): Container {
    return Container::builder($child)
      ->border(
        Border::all(
          BorderSide::builder()
            ->width(1)
            ->color(0xffdce0e7),
        ),
      )
      ->padding(Padding::all(16))
      ->color(Colors::WHITE)
      ->borderRadius(BorderRadius::all(8))
      ->boxShadow(
        BoxShadow::builder()
          ->blurRadius(10)
          ->offset(
            Offset::builder()
              ->dx(4)
              ->dy(4)
          )
          ->color(
            Colors::opacity(Colors::BLACK, 0.5)
          )
      );
  }

  public static function builder($child = null): Container {
    $ret = new Container();
    if (isset($child)) {
      $ret->child($child);
    }
    return $ret;
  }
}