<?php

namespace App\Entity;

use App\Repository\DiscountRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

#[ORM\Entity(repositoryClass: DiscountRepository::class)]
class Discount
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10, unique: true, nullable: true)]
    #[NotBlank(message: 'Le code ne peut pas être vide.', allowNull: true)]
    #[Regex(pattern: '/^[a-zA-Z0-9]+$/', message: 'Le code ne doit contenir que des chiffres et des lettres.')]
    #[Length(min: 2, max: 10, minMessage: 'Le Code doit contenir au minimum 2 caractères.', maxMessage: 'Le code doit contenir au maximum 10 caractères.')]
    private ?string $code = null;

    #[ORM\OneToMany(mappedBy: 'discount', targetEntity: Product::class)]
    private Collection $products;

    #[ORM\Column(length: 10)]
    private ?string $type = null;

    #[ORM\Column(nullable: true)]
    private ?float $value = null;
//
//    #[ORM\Column(nullable: true)]
//    private ?float $percentage = null;


    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function __toString(): string
    {
        if ($this->getCode()) {
            return $this->getCode();
        } else {
            if ($this->getType() === 'percentage')
            {
                return $this->getValue() . '%';
            } else {
                return $this->getValue() . '€';
            }
        }
    }

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): self
    {
        $this->value = $value;

        return $this;
    }
    /**
     * @return Collection<int, Product>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
            $product->setDiscount($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getDiscount() === $this) {
                $product->setDiscount(null);
            }
        }

        return $this;
    }
}
