<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CourscategoryRepository;

#[ORM\Entity(repositoryClass: CourscategoryRepository::class)]
#[ORM\Table(name: "courscategory")]
class Courscategory
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id;

    #[ORM\Column(type: "string", length: 255, nullable: false)]
    private string $categoryname;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryname(): ?string
    {
        return $this->categoryname;
    }

    public function setCategoryname(string $categoryname): static
    {
        $this->categoryname = $categoryname;

        return $this;
    }


}
