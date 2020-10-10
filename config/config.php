<?php

declare(strict_types=1);

use Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain;

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'params' => [
                    'url' => 'mysql://root:password@127.0.0.1:3306/doctrine-sandbox'
                ],
            ],
        ],
        'driver' => [
            'orm_default' => [
                'class' => MappingDriverChain::class,
            ],
        ],
    ],
];
