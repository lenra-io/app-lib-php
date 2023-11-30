<?php
// This file is auto-generated by generate-classes.php but it can be edited

namespace Lenra\App\Components\Styles;

use Lenra\App\Components\Styles\BorderRadius\Definitions\Radius;

class BorderRadius extends \Lenra\App\Base\Components\Styles\BorderRadiusBase {
  // Add here custom implementations

  public static function builder(): BorderRadius {
    return new BorderRadius();
  }

  public static function all(Radius|int $value): BorderRadius {
    if (!($value instanceof Radius)) {
      $value = Radius::builder()->x($value)->y($value);
    }
    // $val = $value->data;
    return BorderRadius::builder()
      ->topLeft($value)
      ->topRight($value)
      ->bottomLeft($value)
      ->bottomRight($value);
  }
}