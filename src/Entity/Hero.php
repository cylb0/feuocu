<?php

namespace App\Entity;

use App\Repository\HeroRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Url;

#[ORM\Entity(repositoryClass: HeroRepository::class)]
class Hero
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Regex(pattern: '/^[^<>;=#{}()*+]/u', message: 'Le message ne peut contenir que des chiffres, des lettres et . , ! ? \'')]
    private ?string $message = null;

    #[ORM\Column(length: 50, nullable: true)]
    #[Regex(pattern: '/^[^<>;=]*$/', message: 'Le message ne peut contenir que des chiffres, des lettres et ".", ",", "!", "?", "\'"')]
    #[Length(min: 3, max: 50, minMessage: 'Le message du bouton doit contenir au moins 3 caractères.', maxMessage: 'Le message du bouton doit contenir au maximum 50 caractères.')]
    private ?string $button_message = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Url(message: 'Le lien doit être une URL valide.')]
    private ?string $link = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: true)]
    private ?Image $image = null;

    #[ORM\Column]
    private ?bool $active = null;

    public function __construct()
    {
        $this->active = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getButtonMessage(): ?string
    {
        return $this->button_message;
    }

    public function setButtonMessage(?string $button_message): self
    {
        $this->button_message = $button_message;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getImage(): ?Image
    {
        return $this->image;
    }

    public function setImage(Image $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }
}
