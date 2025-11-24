<?php

use Doctrine\ORM\EntityManager;

require __DIR__ . "/vendor/autoload.php";
$container = require __DIR__ . "/config/container.php";
assert($container instanceof Psr\Container\ContainerInterface);

$em = $container->get("doctrine.entity_manager.orm_default");
assert($em instanceof EntityManager);

//$product = new Product('foo', 300, new \DateTimeImmutable('2024/06/15 00:00:00'));
//$em->persist($product);
//$em->flush();

// $qb = $em->createQueryBuilder();
// $qb->select('p')
//   ->from(Product::class, 'p')
//   ->orderBy("a;DELETE FROM p2 order by", "DESC");
// var_dump($qb->getQuery()->execute());

$query = $em->createQuery(
    <<<'DQL'
    SELECT p FROM App\Entity\Product p ORDER BY p.created desc
    DQL
    ,
);
var_dump($query->getResult());
