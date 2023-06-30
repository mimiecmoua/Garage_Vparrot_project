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

    #[ORM\Column]
    private ?bool $fermeture = null;

    #[ORM\Column]
    private ?bool $fermeture2 = null;

    #[ORM\Column(length: 255)]
    private ?string $debutAm = null;

    #[ORM\Column(length: 255)]
    private ?string $finAm = null;

    #[ORM\Column(length: 255)]
    private ?string $debutPm = null;

    #[ORM\Column(length: 255)]
    private ?string $finPm = null;

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

    public function isFermeture(): ?bool
    {
        return $this->fermeture;
    }

    public function setFermeture(bool $fermeture): static
    {
        $this->fermeture = $fermeture;

        return $this;
    }

    public function isFermeture2(): ?bool
    {
        return $this->fermeture2;
    }

    public function setFermeture2(bool $fermeture2): static
    {
        $this->fermeture2 = $fermeture2;

        return $this;
    }

    public function getDebutAm(): ?string
    {
        return $this->debutAm;
    }

    public function setDebutAm(string $debutAm): static
    {
        $this->debutAm = $debutAm;

        return $this;
    }

    public function getFinAm(): ?string
    {
        return $this->finAm;
    }

    public function setFinAm(string $finAm): static
    {
        $this->finAm = $finAm;

        return $this;
    }

    public function getDebutPm(): ?string
    {
        return $this->debutPm;
    }

    public function setDebutPm(string $debutPm): static
    {
        $this->debutPm = $debutPm;

        return $this;
    }

    public function getFinPm(): ?string
    {
        return $this->finPm;
    }

    public function setFinPm(string $finPm): static
    {
        $this->finPm = $finPm;

        return $this;
    }
}
