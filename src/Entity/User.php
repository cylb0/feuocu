<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'Un compte avec cet email existe déjà.')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[NotBlank(message: 'Veuillez saisir un adresse email.')]
    #[Length(
        min: 6, max: 180, minMessage: 'Le mail est trop court, 6 caractères minimum', maxMessage: 'Le mail est trop long, 180 caractères maximum'
    )]
    #[Email(
        message: 'L\'adresse email {{ value }} n\'est pas valide.'
    )]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    #[NotBlank(
        message: 'Le mot de passe ne peut pas être vide.', allowNull: true
    )]
    private ?string $password = null;

    #[ORM\Column(length: 50)]
    #[NotBlank(
        message: 'T\'as pas de prénom ?'
    )]
    #[Length(
        min: 2, max: 50, minMessage: 'Ton prénom c\'est lettre ? Sérieux ?', maxMessage: 'C\'est pas un prénom ça, c\'est trop long, 50 caractères max'
    )]
    #[Regex(
        pattern: '/^[\p{L}\-]+(?!-)$/',
        message: 'Dans un prénom il n\'y a que des lettres et des fois un tiret pour séparer 2 lettres ...'
    )]
    private ?string $first_name = null;

    #[ORM\Column(length: 50)]
    #[NotBlank(
        message: 'T\'as pas de nom ?'
    )]
    #[Length(
        min: 2, max: 50, minMessage: 'Ton nom c\'est lettre ? Sérieux ?', maxMessage: 'C\'est pas un nom ça, c\'est un roman, 50 caractères max'
    )]
    #[Regex(
        pattern: '/^[\p{L}\-]+(?!-)$/',
        message: 'Dans un nom il n\'y a que des lettres et des fois un tiret pour séparer 2 lettres ...'
    )]
    private ?string $last_name = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $birth = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[NotBlank(
        message: 'T\'habites nulle part ? Ton adresse est vide', allowNull: true
    )]
    #[Length(
        min: 2, max: 255, minMessage: 'L\'adresse doit contenir au moins 2 caractères', maxMessage: 'C\'est très très long ça ! 255 caractères maximum'
    )]
    #[Regex(
        pattern: '/^[\p{L}\d\s\/\'-]*[a-zA-Z][\p{L}\d\s\/\'-]*$/u',
        message: 'Une adresse ne peut contenir que des lettres, des chiffres, des tirets ou des slash.'
    )]
    private ?string $address = null;

    #[ORM\Column(length: 5, nullable: true)]
    #[NotBlank(
        message: 'Ton code postal est vide', allowNull: true
    )]
    #[Length(
        min: 5, max: 5, exactMessage: 'Un code postal c\'est 5 caractères doudou !'
    )]
    #[Regex(
        pattern: '/^[a-zA-Z0-9]+$/', message: 'Il faut seulement des chiffres et des lettres dans ton code postal.'
    )]
    private ?string $zipcode = null;

    #[ORM\Column(length: 50, nullable: true)]
    #[NotBlank(
        message: 'Ta ville est vide', allowNull: true
    )]
    #[Length(
        min: 1, max: 45, minMessage: 'Le village avec le nom de plus court de France c\'est Y, et y a au moins une lettre dedans !',
        maxMessage: 'C\'est trop long, la commune française au nom le plus long en comporte 45 !'
    )]
    #[Regex(
        pattern: '/^[\p{L}\s\'-]+$/u',
        message: 'Pour la ville, j\'accepte seulement des lettres, des espaces, des apostrophes et des tirets'
    )]
    private ?string $city = null;

    #[ORM\Column(length: 10, nullable: true)]
    #[NotBlank(
        message: 'Un numéro de téléphone sans numéros ? Ah ben mon cochon !', allowNull: true
    )]
    #[Length(
        min: 10, max: 10, exactMessage: 'Il manque des numéros chouchou, il en faut 10 pour ton téléphone !'
    )]
    #[Regex(
        pattern: '/^[0-9]+$/',
        message: 'Il faut seulement mettre des numéros dans ton numéro de téléphone sinon je ne pourrai pas t\'appeler !'
    )]
    private ?string $phone = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(type: 'boolean')]
    private bool $isValidated = false;

    #[ORM\OneToOne(mappedBy: 'user', cascade: ['persist'])]
    private ?Cart $cart = null;

    #[ORM\Column(length: 32)]
    private ?string $validationKey = null;

    public function __construct()
    {
        $this->roles = ['ROLE_USER'];
        $this->validationKey = md5(microtime(TRUE) * 100000);
        $this->created_at = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(?string $first_name): self
    {
        $this->first_name = $first_name ?? '';

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name ?? '';

        return $this;
    }

    public function getBirth(): ?\DateTimeInterface
    {
        return $this->birth;
    }

    public function setBirth(?\DateTimeInterface $birth): self
    {
        $this->birth = $birth;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = empty($address) ? null : $address;

        return $this;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(?string $zipcode): self
    {
        $this->zipcode = empty($zipcode) ? null : $zipcode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = empty($city) ? null : $city;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = empty($phone) ? null : $phone;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function isIsValidated(): ?bool
    {
        return $this->isValidated;
    }

    public function setIsValidated(bool $isValidated): self
    {
        $this->isValidated = $isValidated;

        return $this;
    }

    public function getCart(): ?Cart
    {
        return $this->cart;
    }

    public function setCart(?Cart $cart): self
    {
        // unset the owning side of the relation if necessary
        if ($cart === null && $this->cart !== null) {
            $this->cart->setUser(null);
        }

        // set the owning side of the relation if necessary
        if ($cart !== null && $cart->getUser() !== $this) {
            $cart->setUser($this);
        }

        $this->cart = $cart;

        return $this;
    }

    public function getValidationKey(): ?string
    {
        return $this->validationKey;
    }

    public function setValidationKey(string $validationKey): self
    {
        $this->validationKey = $validationKey;

        return $this;
    }
}
