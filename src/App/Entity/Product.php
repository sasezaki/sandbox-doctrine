<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: \App\Repository\ProductRepository::class)]
#[ORM\Table(name: "products")]
class Product
{

    public function __construct(
        #[ORM\Id]
        #[ORM\Column(type: Types::INTEGER)]
        #[ORM\GeneratedValue]
        readonly public int $id,

        #[ORM\Column(type: Types::STRING, nullable: false)]
        readonly public string $name,

        #[ORM\Column(type: Types::INTEGER, nullable: false)]
        readonly public int $price,

        #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: false)]
        readonly public \DateTimeImmutable $created,
    )
    {
    }
}