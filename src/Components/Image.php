<?php
// This file is auto-generated by generate-classes.php but it can be edited

namespace Lenra\App\Components;

class Image extends \Lenra\App\Base\Components\ImageBase {
  // Add here custom implementations

  public static function builder(string $src): Image {
    return new Image($src);
  }
}