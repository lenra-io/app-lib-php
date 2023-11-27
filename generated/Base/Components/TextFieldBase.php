<?php
// This file is auto-generated by generate-classes.php. Do not edit it.

namespace Lenra\App\Base\Components;

use Lenra\App\Components\Base\Builder;

/**
* @template-extends Builder<\Lenra\App\Response\View\Model\ComponentsTextfield>
*/
abstract class TextFieldBase extends Builder {
  public function __construct(string $value)
  {
    parent::__construct('textfield', \Lenra\App\Response\View\Model\ComponentsTextfield::class);
    $this->value($value);
  }

  public function value(string $value): self {
    $this->data->setValue(Builder::convert($value));
    return $this;
  }

  public function autocorrect(bool $autocorrect): self {
    $this->data->setAutocorrect(Builder::convert($autocorrect));
    return $this;
  }

  public function autofillHints(array $autofillHints): self {
    $this->data->setAutofillHints(Builder::convert($autofillHints));
    return $this;
  }

  public function autofocus(bool $autofocus): self {
    $this->data->setAutofocus(Builder::convert($autofocus));
    return $this;
  }

  public function buildCounter(\Lenra\App\Components\Listener $buildCounter): self {
    $this->data->setBuildCounter(Builder::convert($buildCounter));
    return $this;
  }

  public function style(\Lenra\App\Components\Styles\TextFieldStyle $style): self {
    $this->data->setStyle(Builder::convert($style));
    return $this;
  }

  public function dragStartBehavior(string $dragStartBehavior): self {
    $this->data->setDragStartBehavior(Builder::convert($dragStartBehavior));
    return $this;
  }

  public function enabled(bool $enabled): self {
    $this->data->setEnabled(Builder::convert($enabled));
    return $this;
  }

  public function enableInteractiveSelection(bool $enableInteractiveSelection): self {
    $this->data->setEnableInteractiveSelection(Builder::convert($enableInteractiveSelection));
    return $this;
  }

  public function expands(bool $expands): self {
    $this->data->setExpands(Builder::convert($expands));
    return $this;
  }

  public function keyboardType(\Lenra\App\Components\Styles\TextInputType $keyboardType): self {
    $this->data->setKeyboardType(Builder::convert($keyboardType));
    return $this;
  }

  public function maxLength(int $maxLength): self {
    $this->data->setMaxLength(Builder::convert($maxLength));
    return $this;
  }

  public function maxLengthEnforcement(string $maxLengthEnforcement): self {
    $this->data->setMaxLengthEnforcement(Builder::convert($maxLengthEnforcement));
    return $this;
  }

  public function maxLines(int $maxLines): self {
    $this->data->setMaxLines(Builder::convert($maxLines));
    return $this;
  }

  public function minLines(int $minLines): self {
    $this->data->setMinLines(Builder::convert($minLines));
    return $this;
  }

  public function obscureText(bool $obscureText): self {
    $this->data->setObscureText(Builder::convert($obscureText));
    return $this;
  }

  public function onAppPrivateCommand(\Lenra\App\Components\Listener $onAppPrivateCommand): self {
    $this->data->setOnAppPrivateCommand(Builder::convert($onAppPrivateCommand));
    return $this;
  }

  public function onChanged(\Lenra\App\Components\Listener $onChanged): self {
    $this->data->setOnChanged(Builder::convert($onChanged));
    return $this;
  }

  public function onEditingComplete(\Lenra\App\Components\Listener $onEditingComplete): self {
    $this->data->setOnEditingComplete(Builder::convert($onEditingComplete));
    return $this;
  }

  public function onSubmitted(\Lenra\App\Components\Listener $onSubmitted): self {
    $this->data->setOnSubmitted(Builder::convert($onSubmitted));
    return $this;
  }

  public function onTap(\Lenra\App\Components\Listener $onTap): self {
    $this->data->setOnTap(Builder::convert($onTap));
    return $this;
  }

  public function readOnly(bool $readOnly): self {
    $this->data->setReadOnly(Builder::convert($readOnly));
    return $this;
  }

  public function showCursor(bool $showCursor): self {
    $this->data->setShowCursor(Builder::convert($showCursor));
    return $this;
  }

  public function textCapitalization(string $textCapitalization): self {
    $this->data->setTextCapitalization(Builder::convert($textCapitalization));
    return $this;
  }

  public function textDirection(string $textDirection): self {
    $this->data->setTextDirection(Builder::convert($textDirection));
    return $this;
  }

  public function textInputAction(string $textInputAction): self {
    $this->data->setTextInputAction(Builder::convert($textInputAction));
    return $this;
  }

  public function toolbarOptions(\Lenra\App\Components\Styles\ToolbarOptions $toolbarOptions): self {
    $this->data->setToolbarOptions(Builder::convert($toolbarOptions));
    return $this;
  }

  public function name(string $name): self {
    $this->data->setName(Builder::convert($name));
    return $this;
  }

}
