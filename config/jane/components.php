<?php

return [
    'mapping' => [
        __DIR__ . '/../../api/components/json.schema.json' => [
            'root-class' => 'JsonComponent',
            'namespace' => 'Lenra\\App\\Components\\Json',
            'directory' => __DIR__ . '/../../generated/components/json',
        ],
        __DIR__ . '/../../api/components/lenra.schema.json' => [
            'root-class' => 'LenraComponent',
            'namespace' => 'Lenra\\App\\Components\\Lenra',
            'directory' => __DIR__ . '/../../generated/components/lenra',
        ]
    ]
];