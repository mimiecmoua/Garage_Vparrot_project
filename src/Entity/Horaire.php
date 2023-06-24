<?php

namespace App\Entity;

use App\Repository\HoraireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HoraireRepository::class)]
class Horaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $jour = null;

    #[ORM\Column(length: 255)]
    private ?string $debut_matin = null;

    #[ORM\Column(length: 255)]
    private ?string $fin_matin = null;

    #[ORM\Column(length: 255)]
    private ?string $debut_apresmidi = null;

    #[ORM\Column(length: 255)]
    private ?string $fin_apresmidi = null;

    #[ORM\Column]
    private ?bool $fermeture = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJour(): ?string
    {
        return $this->jour;
    }

    public function setJour(string $jour): static
    {
        $this->jour = $jour;

        return $this;
    }

    public function getDebutMatin(): ?string
    {
        return $this->debut_matin;
    }

    public function setDebutMatin(string $debut_matin): static
    {
        $this->debut_matin = $debut_matin;

        return $this;
    }

    public function getFinMatin(): ?string
    {
        return $this->fin_matin;
    }

    public function setFinMatin(string $fin_matin): static
    {
        $this->fin_matin = $fin_matin;

        return $this;
    }

    public function getDebutApresmidi(): ?string
    {
        return $this->debut_apresmidi;
    }

    public function setDebutApresmidi(string $debut_apresmidi): static
    {
        $this->debut_apresmidi = $debut_apresmidi;

        return $this;
    }

    public function getFinApresmidi(): ?string
    {
        return $this->fin_apresmidi;
    }

    public function setFinApresmidi(string $fin_apresmidi): static
    {
        $this->fin_apresmidi = $fin_apresmidi;

        return $this;
    }

    public function isFermeture(): ?bool
    {
        return $this->fermeture;
    }

    public function setFermeture(bool $fermeture): static
    {
        $this->fermeture = $fermeture;

        return $this;
    }
}
