<?php
// This file is auto-generated by generate-classes.php but it can be edited

namespace Lenra\App\Components;

class Radio extends \Lenra\App\Base\Components\RadioBase {
  // Add here custom implementations

  public static function builder(string $value ,string $groupValue): Radio {
    return new Radio($value ,$groupValue);
  }
}