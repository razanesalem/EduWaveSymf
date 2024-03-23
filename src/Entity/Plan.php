<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\PlanRepository;

#[ORM\Table(name: "plan")]
#[ORM\Entity(repositoryClass: PlanRepository::class)]
class Plan
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(name: "idplan", type: "integer", nullable: false)]
    private $idplan;

    #[ORM\Column(name: "nom", type: "string", length: 10, nullable: false)]
    private $nom;

    public function getIdplan(): ?int
    {
        return $this->idplan;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }
}
