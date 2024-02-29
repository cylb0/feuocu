<?php

namespace App\Entity;

use App\Repository\ProductVariantOptionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductVariantOptionRepository::class)]
class ProductVariantOption
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $code = null;

    #[ORM\ManyToOne(cascade: ['remove'], inversedBy: 'productVariantOptions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ProductVariant $variant = null;

    #[ORM\ManyToOne(inversedBy: 'productVariantOptions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ProductOption $option = null;

    #[ORM\ManyToOne(inversedBy: 'productVariantOptions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ProductOptionValue $value = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getVariant(): ?ProductVariant
    {
        return $this->variant;
    }

    public function setVariant(?ProductVariant $variant): self
    {
        $this->variant = $variant;

        return $this;
    }

    public function getOption(): ?ProductOption
    {
        return $this->option;
    }

    public function setOption(?ProductOption $option): self
    {
        $this->option = $option;

        return $this;
    }

    public function getValue(): ?ProductOptionValue
    {
        return $this->value;
    }

    public function setValue(?ProductOptionValue $value): self
    {
        $this->value = $value;

        return $this;
    }
}
