<?php
// This file is auto-generated by generate-classes.php but it can be edited

namespace Lenra\App\Components;

class DropdownButton extends \Lenra\App\Base\Components\DropdownButtonBase {
  // Add here custom implementations

  public static function builder(string $text ,$child): DropdownButton {
    return new DropdownButton($text ,$child);
  }
}