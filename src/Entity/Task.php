<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TaskRepository;

#[ORM\Table(name: "task")]
#[ORM\Entity(repositoryClass: TaskRepository::class)]
class Task
{
    #[ORM\Column(name: "idtask", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private $idtask;

    #[ORM\Column(name: "nomcour", type: "string", length: 10, nullable: false)]
    private $nomcour;

    #[ORM\Column(name: "date", type: "date", nullable: false)]
    private $date;

    #[ORM\Column(name: "etat", type: "string", length: 10, nullable: false, options: ["default" => "'en attente'"])]
    private $etat = '\'en attente\'';

    #[ORM\ManyToOne(targetEntity: "Plan")]
        #[ORM\JoinColumn(name: "idplan", referencedColumnName: "idplan")]
    private $idplan;

    public function getIdtask(): ?int
    {
        return $this->idtask;
    }

    public function getNomcour(): ?string
    {
        return $this->nomcour;
    }

    public function setNomcour(string $nomcour): static
    {
        $this->nomcour = $nomcour;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getIdplan(): ?Plan
    {
        return $this->idplan;
    }

    public function setIdplan(?Plan $idplan): static
    {
        $this->idplan = $idplan;

        return $this;
    }
}
