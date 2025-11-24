<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: \App\Repository\ProductRepository::class)]
#[ORM\Table(name: "products")]
readonly class Product
{

    #[ORM\Id]
    #[ORM\Column(type: Types::INTEGER)]
    #[ORM\GeneratedValue]
    public int $id;

    public function __construct(
        #[ORM\Column(type: Types::STRING, nullable: false)]
        public string $name,

        #[ORM\Column(type: Types::INTEGER, nullable: false)]
        public int $price,

        #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: false)]
        public \DateTimeImmutable $created,
    )
    {
    }
}