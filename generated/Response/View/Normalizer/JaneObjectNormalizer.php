<?php

namespace Lenra\App\Response\View\Normalizer;

use Lenra\App\Response\View\Runtime\Normalizer\CheckArray;
use Lenra\App\Response\View\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = array('Lenra\\App\\Response\\View\\Model\\ComponentsListener' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsListenerNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsActionable' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsActionableNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsButton' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsButtonNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsCarousel' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsCarouselNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsCheckbox' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsCheckboxNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsContainer' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsContainerNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsDropdownButton' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsDropdownButtonNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsFlex' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsFlexNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsFlexible' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsFlexibleNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsForm' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsFormNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsIcon' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsIconNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsImage' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsImageNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsMenu' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsMenuNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsMenuItem' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsMenuItemNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsOverlayEntry' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsOverlayEntryNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsRadio' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsRadioNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsSlider' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsSliderNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStack' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStackNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStatusSticker' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStatusStickerNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsText' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsTextNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsTextfield' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsTextfieldNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsToggle' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsToggleNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsView' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsViewNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsWrap' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsWrapNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsViewDefinitionsFind' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsViewDefinitionsFindNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesToggleStyle' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesToggleStyleNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesTextFieldStyle' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesTextFieldStyleNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesTextInputType' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesTextInputTypeNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesToolbarOptions' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesToolbarOptionsNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesRadius' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesRadiusNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesInputDecoration' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesInputDecorationNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesPadding' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesPaddingNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesStrutStyle' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesStrutStyleNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesTextStyle' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesTextStyleNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBoxShadow' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesBoxShadowNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesOffset' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesOffsetNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesInputBorder' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesInputBorderNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBoxConstraints' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesBoxConstraintsNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorderRadius' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesBorderRadiusNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorderSide' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesBorderSideNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorderRadiusDefinitionsRadiusType' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesBorderRadiusDefinitionsRadiusTypeNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesLocale' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesLocaleNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesSliderStyle' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesSliderStyleNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesRadioStyle' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesRadioStyleNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesRect' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesRectNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorder' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesBorderNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBoxDecoration' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesBoxDecorationNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesCheckboxStyle' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesCheckboxStyleNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesOutlinedBorder' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesOutlinedBorderNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesCarouselOptions' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesCarouselOptionsNormalizer', 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesDuration' => 'Lenra\\App\\Response\\View\\Normalizer\\ComponentsStylesDurationNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Lenra\\App\\Response\\View\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this);
        $normalizer->setDenormalizer($this);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Response\\View\\Model\\ComponentsListener' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsActionable' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsButton' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsCarousel' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsCheckbox' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsContainer' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsDropdownButton' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsFlex' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsFlexible' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsForm' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsIcon' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsImage' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsMenu' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsMenuItem' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsOverlayEntry' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsRadio' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsSlider' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStack' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStatusSticker' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsText' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsTextfield' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsToggle' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsView' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsWrap' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsViewDefinitionsFind' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesToggleStyle' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesTextFieldStyle' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesTextInputType' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesToolbarOptions' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesRadius' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesInputDecoration' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesPadding' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesStrutStyle' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesTextStyle' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBoxShadow' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesOffset' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesInputBorder' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBoxConstraints' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorderRadius' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorderSide' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorderRadiusDefinitionsRadiusType' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesLocale' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesSliderStyle' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesRadioStyle' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesRect' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorder' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBoxDecoration' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesCheckboxStyle' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesOutlinedBorder' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesCarouselOptions' => false, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesDuration' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false);
    }
}