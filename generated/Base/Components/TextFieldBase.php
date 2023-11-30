<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

abstract class TextFieldBase extends Builder {
  public function __construct(string $value)
  {
    parent::__construct('textfield');
    $this->value($value);
  }

  public function value(string $value): self {
    $this->data['value'] = $value;
    return $this;
  }

  public function autocorrect(bool $autocorrect): self {
    $this->data['autocorrect'] = $autocorrect;
    return $this;
  }

  public function autofillHints(array $autofillHints): self {
    $this->data['autofillHints'] = $autofillHints;
    return $this;
  }

  public function autofocus(bool $autofocus): self {
    $this->data['autofocus'] = $autofocus;
    return $this;
  }

  public function buildCounter(\Lenra\App\Components\Listener $buildCounter): self {
    $this->data['buildCounter'] = $buildCounter;
    return $this;
  }

  public function style(\Lenra\App\Components\Styles\TextFieldStyle $style): self {
    $this->data['style'] = $style;
    return $this;
  }

  public function dragStartBehavior(string $dragStartBehavior): self {
    $this->data['dragStartBehavior'] = $dragStartBehavior;
    return $this;
  }

  public function enabled(bool $enabled): self {
    $this->data['enabled'] = $enabled;
    return $this;
  }

  public function enableInteractiveSelection(bool $enableInteractiveSelection): self {
    $this->data['enableInteractiveSelection'] = $enableInteractiveSelection;
    return $this;
  }

  public function expands(bool $expands): self {
    $this->data['expands'] = $expands;
    return $this;
  }

  public function keyboardType(\Lenra\App\Components\Styles\TextInputType $keyboardType): self {
    $this->data['keyboardType'] = $keyboardType;
    return $this;
  }

  public function maxLength(int $maxLength): self {
    $this->data['maxLength'] = $maxLength;
    return $this;
  }

  public function maxLengthEnforcement(string $maxLengthEnforcement): self {
    $this->data['maxLengthEnforcement'] = $maxLengthEnforcement;
    return $this;
  }

  public function maxLines(int $maxLines): self {
    $this->data['maxLines'] = $maxLines;
    return $this;
  }

  public function minLines(int $minLines): self {
    $this->data['minLines'] = $minLines;
    return $this;
  }

  public function obscureText(bool $obscureText): self {
    $this->data['obscureText'] = $obscureText;
    return $this;
  }

  public function onAppPrivateCommand(\Lenra\App\Components\Listener $onAppPrivateCommand): self {
    $this->data['onAppPrivateCommand'] = $onAppPrivateCommand;
    return $this;
  }

  public function onChanged(\Lenra\App\Components\Listener $onChanged): self {
    $this->data['onChanged'] = $onChanged;
    return $this;
  }

  public function onEditingComplete(\Lenra\App\Components\Listener $onEditingComplete): self {
    $this->data['onEditingComplete'] = $onEditingComplete;
    return $this;
  }

  public function onSubmitted(\Lenra\App\Components\Listener $onSubmitted): self {
    $this->data['onSubmitted'] = $onSubmitted;
    return $this;
  }

  public function onTap(\Lenra\App\Components\Listener $onTap): self {
    $this->data['onTap'] = $onTap;
    return $this;
  }

  public function readOnly(bool $readOnly): self {
    $this->data['readOnly'] = $readOnly;
    return $this;
  }

  public function showCursor(bool $showCursor): self {
    $this->data['showCursor'] = $showCursor;
    return $this;
  }

  public function textCapitalization(string $textCapitalization): self {
    $this->data['textCapitalization'] = $textCapitalization;
    return $this;
  }

  public function textDirection(string $textDirection): self {
    $this->data['textDirection'] = $textDirection;
    return $this;
  }

  public function textInputAction(string $textInputAction): self {
    $this->data['textInputAction'] = $textInputAction;
    return $this;
  }

  public function toolbarOptions(\Lenra\App\Components\Styles\ToolbarOptions $toolbarOptions): self {
    $this->data['toolbarOptions'] = $toolbarOptions;
    return $this;
  }

  public function name(string $name): self {
    $this->data['name'] = $name;
    return $this;
  }

}