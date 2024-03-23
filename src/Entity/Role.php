<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\RoleRepository;

#[ORM\Table(name: "role")]
#[ORM\Entity(repositoryClass: RoleRepository::class)]
class Role
{
    #[ORM\Column(name: "id_role", type: "integer", nullable: false)]
    private $idRole;

    #[ORM\Column(name: "id", type: "integer", nullable: false)]
    private $id;

    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    #[ORM\OneToOne(targetEntity: "User")]
        #[ORM\JoinColumn(name: "nom_role", referencedColumnName: "role")]
    private $nomRole;

    public function getIdRole(): ?int
    {
        return $this->idRole;
    }

    public function setIdRole(int $idRole): static
    {
        $this->idRole = $idRole;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getNomRole(): ?User
    {
        return $this->nomRole;
    }

    public function setNomRole(?User $nomRole): static
    {
        $this->nomRole = $nomRole;

        return $this;
    }
}
