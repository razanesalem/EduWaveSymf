<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CategoriecodepromoRepository;

#[ORM\Entity(repositoryClass: CategoriecodepromoRepository::class)]
class Categoriecodepromo
{
   
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id;
    
    #[ORM\Column(type: "string", length: 200, nullable: false)]
    private string $code;

    #[ORM\Column(type: "float", precision: 10, scale: 0, nullable: false)]
    private float $value;

    #[ORM\Column(type: "integer", nullable: false)]
    private int $nbUsers;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(float $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getNbUsers(): ?int
    {
        return $this->nbUsers;
    }

    public function setNbUsers(int $nbUsers): static
    {
        $this->nbUsers = $nbUsers;

        return $this;
    }


}
