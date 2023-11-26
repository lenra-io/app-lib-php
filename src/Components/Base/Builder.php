<?php

namespace Lenra\App\Components\Base;

/**
 * @template T
 */
class Builder implements \JsonSerializable
{
    private static $normalizers = [];
    /**
     * @var T
     */
    protected $data;
    private string $normalizer;
    public function __construct(string|Null $type, string $model, string $normalizer)
    {
        $this->normalizer = $normalizer;
        $this->data = new ($model)();
        if (isset($type)) {
            $this->data->setType($type);
        }
    }

    function jsonSerialize(): mixed
    {
        if (!isset(Builder::$normalizers[$this->normalizer])) {
            Builder::$normalizers[$this->normalizer] = new ($this->normalizer)();
        }

        return Builder::$normalizers[$this->normalizer]->normalize($this->data);
    }

    static function convert($value): mixed
    {
        echo "convert\n";
        var_dump($value);
        if ($value instanceof Builder) {
            echo "Builder\n";
            $value = $value->data;
        }
        elseif (is_array($value)) {
            echo "array\n";
            $value = array_map(function ($item) {
                return Builder::convert($item);
            }, $value);
        }
        echo "return\n";
        var_dump($value);
        return $value;
    }
}