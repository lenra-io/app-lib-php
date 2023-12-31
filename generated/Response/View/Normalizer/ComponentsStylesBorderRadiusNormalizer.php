<?php

namespace Lenra\App\Response\View\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Lenra\App\Response\View\Runtime\Normalizer\CheckArray;
use Lenra\App\Response\View\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ComponentsStylesBorderRadiusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorderRadius';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Response\View\Model\ComponentsStylesBorderRadius;
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Lenra\App\Response\View\Model\ComponentsStylesBorderRadius();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('topLeft', $data)) {
            $object->setTopLeft($this->denormalizer->denormalize($data['topLeft'], 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorderRadiusDefinitionsRadiusType', 'json', $context));
        }
        if (\array_key_exists('topRight', $data)) {
            $object->setTopRight($this->denormalizer->denormalize($data['topRight'], 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorderRadiusDefinitionsRadiusType', 'json', $context));
        }
        if (\array_key_exists('bottomLeft', $data)) {
            $object->setBottomLeft($this->denormalizer->denormalize($data['bottomLeft'], 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorderRadiusDefinitionsRadiusType', 'json', $context));
        }
        if (\array_key_exists('bottomRight', $data)) {
            $object->setBottomRight($this->denormalizer->denormalize($data['bottomRight'], 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorderRadiusDefinitionsRadiusType', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('topLeft') && null !== $object->getTopLeft()) {
            $data['topLeft'] = $this->normalizer->normalize($object->getTopLeft(), 'json', $context);
        }
        if ($object->isInitialized('topRight') && null !== $object->getTopRight()) {
            $data['topRight'] = $this->normalizer->normalize($object->getTopRight(), 'json', $context);
        }
        if ($object->isInitialized('bottomLeft') && null !== $object->getBottomLeft()) {
            $data['bottomLeft'] = $this->normalizer->normalize($object->getBottomLeft(), 'json', $context);
        }
        if ($object->isInitialized('bottomRight') && null !== $object->getBottomRight()) {
            $data['bottomRight'] = $this->normalizer->normalize($object->getBottomRight(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorderRadius' => false);
    }
}