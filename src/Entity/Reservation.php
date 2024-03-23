<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReservationRepository;
use App\Entity\Cours;
use App\Entity\User;
use App\Entity\Categoriecodepromo;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
/*#[ORM\Table(
    name: "reservation",
    indexes: [
        new \Doctrine\ORM\Mapping\Index(name: "id_codepromo", columns: ["id_codepromo"]),
        new \Doctrine\ORM\Mapping\Index(name: "id_user", columns: ["id_user"]),
        new \Doctrine\ORM\Mapping\Index(name: "id_cours", columns: ["id_cours"])
    ]
)]*/

class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id;

    #[ORM\Column(type: "boolean", nullable: false)]
    private bool $resstatus;

    #[ORM\Column(type: "datetime", nullable: false)]
    private \DateTimeInterface $dateReservation;

    #[ORM\Column(type: "float", precision: 10, scale: 0, nullable: false)]
    private float $prixd;

    #[ORM\Column(type: "boolean", nullable: false)]
    private bool $paidstatus;

    #[ORM\ManyToOne(targetEntity: Categoriecodepromo::class)]
    #[ORM\JoinColumn(name: "id_codepromo", referencedColumnName: "id")]
    private ?Categoriecodepromo $idCodepromo;

    #[ORM\ManyToOne(targetEntity: Cours::class)]
    #[ORM\JoinColumn(name: "id_cours", referencedColumnName: "id")]
    private ?Cours $idCours;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: "id_user", referencedColumnName: "id")]
    private ?User $idUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isResstatus(): ?bool
    {
        return $this->resstatus;
    }

    public function setResstatus(bool $resstatus): self
    {
        $this->resstatus = $resstatus;
        return $this;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeInterface $dateReservation): self
    {
        $this->dateReservation = $dateReservation;
        return $this;
    }

    public function getPrixd(): ?float
    {
        return $this->prixd;
    }

    public function setPrixd(float $prixd): self
    {
        $this->prixd = $prixd;
        return $this;
    }

    public function isPaidstatus(): ?bool
    {
        return $this->paidstatus;
    }

    public function setPaidstatus(bool $paidstatus): self
    {
        $this->paidstatus = $paidstatus;
        return $this;
    }

    public function getIdCodepromo(): ?Categoriecodepromo
    {
        return $this->idCodepromo;
    }

    public function setIdCodepromo(?Categoriecodepromo $idCodepromo): self
    {
        $this->idCodepromo = $idCodepromo;
        return $this;
    }

    public function getIdCours(): ?Cours
    {
        return $this->idCours;
    }

    public function setIdCours(?Cours $idCours): self
    {
        $this->idCours = $idCours;
        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;
        return $this;
    }
}
