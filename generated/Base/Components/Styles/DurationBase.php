<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components\Styles;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsStylesDuration>
*/
abstract class DurationBase extends Builder {
  public function __construct()
  {
    parent::__construct(Null, \Lenra\App\Response\View\Model\ComponentsStylesDuration::class);
  }

  public function days(int $days): self {
    $this->data->setDays(Builder::convert($days));
    return $this;
  }

  public function hours(int $hours): self {
    $this->data->setHours(Builder::convert($hours));
    return $this;
  }

  public function minutes(int $minutes): self {
    $this->data->setMinutes(Builder::convert($minutes));
    return $this;
  }

  public function seconds(int $seconds): self {
    $this->data->setSeconds(Builder::convert($seconds));
    return $this;
  }

  public function milliseconds(int $milliseconds): self {
    $this->data->setMilliseconds(Builder::convert($milliseconds));
    return $this;
  }

  public function microseconds(int $microseconds): self {
    $this->data->setMicroseconds(Builder::convert($microseconds));
    return $this;
  }

}