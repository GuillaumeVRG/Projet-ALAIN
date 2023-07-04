<?php

namespace App\Entity;

use App\Repository\FormRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: FormRepository::class)]
class Form
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $Ville = null;

    #[ORM\Column]
    private ?int $Telephone = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Informations = null;

    #[ORM\Column]
    private ?bool $Rappel = null;

    #[ORM\Column]
    private ?bool $CGU = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): static
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): static
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->Telephone;
    }

    public function setTelephone(int $Telephone): static
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getInformations(): ?string
    {
        return $this->Informations;
    }

    public function setInformations(string $Informations): static
    {
        $this->Informations = $Informations;

        return $this;
    }

    public function isRappel(): ?bool
    {
        return $this->Rappel;
    }

    public function setRappel(bool $Rappel): static
    {
        $this->Rappel = $Rappel;

        return $this;
    }

    public function isCGU(): ?bool
    {
        return $this->CGU;
    }

    public function setCGU(bool $CGU): static
    {
        $this->CGU = $CGU;

        return $this;
    }
}
