<?php

namespace App\Entity;

use App\Repository\ProductOptionValueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductOptionValueRepository::class)]
class  ProductOptionValue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $value = null;

    #[ORM\ManyToOne(inversedBy: 'productOptionValues')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ProductOption $option = null;

    #[ORM\OneToMany(mappedBy: 'value', targetEntity: ProductVariantOption::class, orphanRemoval: true)]
    private Collection $productVariantOptions;

    #[ORM\Column(length: 7, nullable: true)]
    private ?string $hexacode = null;

    public function __construct()
    {
        $this->productVariantOptions = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->getValue();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

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

    /**
     * @return Collection<int, ProductVariantOption>
     */
    public function getProductVariantOptions(): Collection
    {
        return $this->productVariantOptions;
    }

    public function addProductVariantOption(ProductVariantOption $productVariantOption): self
    {
        if (!$this->productVariantOptions->contains($productVariantOption)) {
            $this->productVariantOptions->add($productVariantOption);
            $productVariantOption->setValue($this);
        }

        return $this;
    }

    public function removeProductVariantOption(ProductVariantOption $productVariantOption): self
    {
        if ($this->productVariantOptions->removeElement($productVariantOption)) {
            // set the owning side to null (unless already changed)
            if ($productVariantOption->getValue() === $this) {
                $productVariantOption->setValue(null);
            }
        }

        return $this;
    }

    public function getHexacode(): ?string
    {
        return $this->hexacode;
    }

    public function setHexacode(?string $hexacode): self
    {
        $this->hexacode = $hexacode;

        return $this;
    }
}
