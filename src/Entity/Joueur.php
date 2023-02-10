<?php

namespace App\Entity;

use App\Repository\JoueurRepository;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: JoueurRepository::class)]
class Joueur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull]
    private ?string $nom = null;

    #[ORM\Column(length: 25)]
    #[Assert\NotNull]
    private ?string $activité = null;

    #[ORM\Column(nullable: true)]
    #[Assert\PositiveOrZero]
    private ?int $nb_vaisseau = null;

    #[ORM\Column]
    private ?bool $alliance = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getActivité(): ?string
    {
        return $this->activité;
    }

    public function setActivité(string $activité): self
    {
        $this->activité = $activité;

        return $this;
    }

    public function getNbVaisseau(): ?int
    {
        return $this->nb_vaisseau;
    }

    public function setNbVaisseau(?int $nb_vaisseau): self
    {
        $this->nb_vaisseau = $nb_vaisseau;

        return $this;
    }

    public function isAlliance(): ?bool
    {
        return $this->alliance;
    }

    public function setAlliance(bool $alliance): self
    {
        $this->alliance = $alliance;

        return $this;
    }
}
