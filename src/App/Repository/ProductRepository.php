<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\Product;
use Doctrine\ORM\EntityRepository;

/**
 * @template-extends EntityRepository<Product>
 */
class ProductRepository extends EntityRepository
{
    public function findA(string $userName) : void
    {
        // https://x.com/sasezaki/status/1804376637003473001
//        $qb = $this->createQueryBuilder('p')
//            ->where(
//                "CONCAT(p.firstName, p.lastName) = {$userName}"
//            );

    }
}