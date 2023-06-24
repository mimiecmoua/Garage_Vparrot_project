<?php

namespace App\Entity;

use App\Repository\OccasionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OccasionRepository::class)]
class Occasion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $marque = null;

    #[ORM\Column(length: 255)]
    private ?string $modele = null;

    #[ORM\Column(length: 255)]
    private ?string $mise_circulation = null;

    #[ORM\Column]
    private ?int $prix = null;

    #[ORM\Column]
    private ?int $kilometrage = null;

    #[ORM\Column]
    private ?int $places = null;

    #[ORM\Column(length: 255)]
    private ?string $type_motorisation = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    private ?string $image2 = null;

    #[ORM\Column(length: 255)]
    private ?string $image3 = null;

    #[ORM\ManyToOne(inversedBy: 'occasions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $auteur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): static
    {
        $this->modele = $modele;

        return $this;
    }

    public function getMiseCirculation(): ?string
    {
        return $this->mise_circulation;
    }

    public function setMiseCirculation(string $mise_circulation): static
    {
        $this->mise_circulation = $mise_circulation;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(int $kilometrage): static
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getPlaces(): ?int
    {
        return $this->places;
    }

    public function setPlaces(int $places): static
    {
        $this->places = $places;

        return $this;
    }

    public function getTypeMotorisation(): ?string
    {
        return $this->type_motorisation;
    }

    public function setTypeMotorisation(string $type_motorisation): static
    {
        $this->type_motorisation = $type_motorisation;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getImage2(): ?string
    {
        return $this->image2;
    }

    public function setImage2(string $image2): static
    {
        $this->image2 = $image2;

        return $this;
    }

    public function getImage3(): ?string
    {
        return $this->image3;
    }

    public function setImage3(string $image3): static
    {
        $this->image3 = $image3;

        return $this;
    }

    public function getAuteur(): ?User
    {
        return $this->auteur;
    }

    public function setAuteur(?User $auteur): static
    {
        $this->auteur = $auteur;

        return $this;
    }
}
