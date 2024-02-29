<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Regex;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, unique: true)]
    #[NotBlank(
        message: 'Le nom ne peut pas être vide.'
    )]
    #[Length(
        min: 3, max: 255, minMessage: 'Le nom est trop court, 3 caractères minimum', maxMessage: 'Le nom est trop long, 255 caractères maximum'
    )]
    #[Regex(
        pattern: '/^[A-Za-z0-9\sÀ-ÿ]+$/',
        message: 'Le nom ne peut contenir que des lettres, des chiffres et des espaces.'
    )]
    private ?string $name = null;

    #[ORM\Column(length: 50, unique: true, nullable: true)]
    private ?string $slug = null;

    #[ORM\OneToMany(mappedBy: 'product', targetEntity: Image::class, cascade: ['persist', 'remove'])]
    private Collection $images;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $short_description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    #[NotNull]
    #[Positive]
    private ?float $price = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Brand $brand = null;

    #[ORM\OneToMany(mappedBy: 'product', targetEntity: ProductVariant::class, orphanRemoval: true)]
    private Collection $productVariants;

    #[ORM\Column(nullable: true)]
    #[Range(notInRangeMessage: 'La note doit être comprise entre 0 et 5.', invalidMessage: 'Entrez un nombre', min: 0, max: 5)]
    private ?float $rating = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    private ?Discount $discount = null;

    #[ORM\Column(length: 13, nullable: true)]
    private ?string $EAN = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $added = null;

    #[ORM\ManyToMany(targetEntity: Feature::class, inversedBy: 'products', fetch: 'EAGER')]
    private Collection $features;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $feature1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $feature2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $feature3 = null;

    #[ORM\Column(nullable: true)]
    private ?bool $simpleProduct = null;

    public function __construct()
    {
        $this->images = new ArrayCollection();
        $this->productVariants = new ArrayCollection();
        $this->features = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->getName();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->short_description;
    }

    public function setShortDescription(?string $short_description): self
    {
        $this->short_description = $short_description;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return Collection<int, Image>
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images->add($image);
            $image->setProduct($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getProduct() === $this) {
                $image->setProduct(null);
            }
        }

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getBrand(): ?Brand
    {
        return $this->brand;
    }

    public function setBrand(?Brand $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return Collection<int, ProductVariant>
     */
    public function getProductVariants(): Collection
    {
        return $this->productVariants;
    }

    public function addProductVariant(ProductVariant $productVariant): self
    {
        if (!$this->productVariants->contains($productVariant)) {
            $this->productVariants->add($productVariant);
            $productVariant->setProduct($this);
        }

        return $this;
    }

    public function removeProductVariant(ProductVariant $productVariant): self
    {
        if ($this->productVariants->removeElement($productVariant)) {
            // set the owning side to null (unless already changed)
            if ($productVariant->getProduct() === $this) {
                $productVariant->setProduct(null);
            }
        }

        return $this;
    }

    public function getRating(): ?float
    {
        return $this->rating;
    }

    public function setRating(?float $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getDiscount(): ?Discount
    {
        return $this->discount;
    }

    public function setDiscount(?Discount $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    public function getEAN(): ?string
    {
        return $this->EAN;
    }

    public function setEAN(string $EAN): self
    {
        $this->EAN = $EAN;

        return $this;
    }

    public function getAdded(): ?\DateTimeImmutable
    {
        return $this->added;
    }

    public function setAdded(\DateTimeImmutable $added): self
    {
        $this->added = $added;

        return $this;
    }

    /**
     * @return Collection<int, Feature>
     */
    public function getFeatures(): Collection
    {
        return $this->features;
    }

    public function addFeature(Feature $feature): self
    {
        if (!$this->features->contains($feature)) {
            $this->features->add($feature);
        }

        return $this;
    }

    public function removeFeature(Feature $feature): self
    {
        $this->features->removeElement($feature);

        return $this;
    }

    public function getFeature1(): ?string
    {
        return $this->feature1;
    }

    public function setFeature1(?string $feature1): self
    {
        $this->feature1 = $feature1;

        return $this;
    }

    public function getFeature2(): ?string
    {
        return $this->feature2;
    }

    public function setFeature2(?string $feature2): self
    {
        $this->feature2 = $feature2;

        return $this;
    }

    public function getFeature3(): ?string
    {
        return $this->feature3;
    }

    public function setFeature3(?string $feature3): self
    {
        $this->feature3 = $feature3;

        return $this;
    }

    public function isSimpleProduct(): ?bool
    {
        return $this->simpleProduct;
    }

    public function setSimpleProduct(bool $simpleProduct): self
    {
        $this->simpleProduct = $simpleProduct;

        return $this;
    }
}