<?php

declare(strict_types=1);

// see https://github.com/Roave/psr-container-doctrine/blob/5.2.x/example/full-config.php

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driver_class' => \Doctrine\DBAL\Driver\PDO\MySQL\Driver::class,
                'params' => [
                    'driver'   => 'pdo_mysql',
                    'user'     => 'root',
                    'password' => 'password',
                    'dbname'   => 'doctrine_sandbox',
                    'host' => '127.0.0.1'
                ]
            ],
        ],
        'driver' => [
            'orm_default' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AttributeDriver::class,
                'drivers' => [
                    'App\\Entity' => 'app_entity',
                ]
            ],
            'app_entity' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AttributeDriver::class,
                // 'cache' => 'filesystem',
                'paths' => __DIR__ . '/../src/App/Entity',
            ],
        ],
//         'cache' => [
//             'filesystem' => [
//                 'class' => \Symfony\Component\Cache\Adapter\FilesystemAdapter::class,
//                 'directory' => 'data/cache/DoctrineCache',
//                 'namespace' => 'psr-container-doctrine',
//             ],
//         ]
    ],
];
