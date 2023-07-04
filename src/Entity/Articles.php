<?php

namespace App\Entity;

use App\Repository\ArticlesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticlesRepository::class)]
class Articles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Texte = null;

    #[ORM\Column(length: 255)]
    private ?string $Image = null;

    #[ORM\Column]
    private ?bool $Public = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): static
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->Texte;
    }

    public function setTexte(string $Texte): static
    {
        $this->Texte = $Texte;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): static
    {
        $this->Image = $Image;

        return $this;
    }

    public function isPublic(): ?bool
    {
        return $this->Public;
    }

    public function setPublic(bool $Public): static
    {
        $this->Public = $Public;

        return $this;
    }

}
