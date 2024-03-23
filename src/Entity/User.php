<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;

#[ORM\Entity(repositoryClass: UserRepository::class)]

class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer", nullable: false)]
    private ?int $id;

    #[ORM\Column(type: "string", length: 15, nullable: false)]
    private string $nom;

    #[ORM\Column(type: "string", length: 15, nullable: false)]
    private string $prenom;

    #[ORM\Column(type: "string", length: 15, nullable: false)]
    private string $role;

    #[ORM\Column(type: "integer", nullable: true, options: ["default" => NULL])]
    private ?int $age = NULL;

    #[ORM\Column(type: "string", length: 255, nullable: true, options: ["default" => NULL])]
    private ?string $image = NULL;

    #[ORM\Column(type: "integer", nullable: true, options: ["default" => NULL])]
    private ?int $numTel = NULL;

    #[ORM\Column(type: "string", length: 50, nullable: false)]
    private string $email;

    #[ORM\Column(type: "string", length: 100, nullable: false)]
    private string $mdp;

    #[ORM\Column(type: "string", length: 20, nullable: false)]
    private string $status;

    #[ORM\Column(type: "integer", nullable: true, options: ["default" => NULL])]
    private ?int $resetcode = NULL;

    #[ORM\Column(type: "string", length: 25, nullable: true, options: ["default" => NULL])]
    private ?string $confirmcode = NULL;

    #[ORM\Column(type: "integer", nullable: true, options: ["default" => NULL])]
    private ?int $statuscode = NULL;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->numTel;
    }

    public function setNumTel(?int $numTel): static
    {
        $this->numTel = $numTel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): static
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getResetcode(): ?int
    {
        return $this->resetcode;
    }

    public function setResetcode(?int $resetcode): static
    {
        $this->resetcode = $resetcode;

        return $this;
    }

    public function getConfirmcode(): ?string
    {
        return $this->confirmcode;
    }

    public function setConfirmcode(?string $confirmcode): static
    {
        $this->confirmcode = $confirmcode;

        return $this;
    }

    public function getStatuscode(): ?int
    {
        return $this->statuscode;
    }

    public function setStatuscode(?int $statuscode): static
    {
        $this->statuscode = $statuscode;

        return $this;
    }


}
