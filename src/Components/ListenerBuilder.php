<?php

namespace Lenra\App\Components;

use Lenra\App\Components\Json\Model\Listener as ModelListener;
use Lenra\App\Components\Json\Normalizer\ListenerNormalizer;

class ListenerBuilder implements \JsonSerializable
{
    private static ListenerNormalizer $normalizer;
    private ModelListener $data;
    public function __construct(string $name)
    {
        $this->data = new ModelListener();
        $this->data->setType("listener");
        $this->data->setName($name);
    }

    public function props($props) {
        $this->data->setProps($props);
        return $this;
    }

    function jsonSerialize(): mixed
    {
        if (!isset(ListenerBuilder::$normalizer)) {
            ListenerBuilder::$normalizer = new ListenerNormalizer();
        }

        return ListenerBuilder::$normalizer->normalize($this->data);
    }
}