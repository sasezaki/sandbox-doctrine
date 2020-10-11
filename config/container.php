<?php
declare(strict_types=1);

use Laminas\ServiceManager\ServiceManager;
use Roave\PsrContainerDoctrine\EntityManagerFactory;

return new ServiceManager([
    'factories' => [
        'doctrine.entity_manager.orm_default' => EntityManagerFactory::class,
    ],
    'services' => [
        'config' => require __DIR__ . '/config.php'
    ]
]);
