<?php

use App\Entity\Product;
use Doctrine\ORM\EntityManager;

require __DIR__ . '/vendor/autoload.php';
$container = require __DIR__ .'/config/container.php';
assert($container instanceof Psr\Container\ContainerInterface);

$em = $container->get('doctrine.entity_manager.orm_default');
assert($em instanceof EntityManager);

//$product = new Product('foo', 300, new \DateTimeImmutable('2024/06/15 00:00:00'));
//$em->persist($product);
//$em->flush();

$qb = $em->createQueryBuilder();

//$qb->select('p')
//   ->from(Product::class, 'p')
//   ->orderBy("a;DELETE FROM p2 order by", "DESC");

$qb->select('p')
    ->from(Product::class, 'p');

var_dump($qb->getQuery()->execute());