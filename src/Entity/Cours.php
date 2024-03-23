<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CoursRepository;

#[ORM\Entity(repositoryClass: CoursRepository::class)]

class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer", nullable: false)]
    private $id;

    #[ORM\Column(type: "string", length: 50, nullable: false)]
    private $coursname;

    #[ORM\Column(type: "string", length: 255, nullable: false)]
    private $coursdescription;

    #[ORM\Column(type: "string", length: 255, nullable: false)]
    private $coursimage;

    #[ORM\Column(type: "integer", nullable: false)]
    private $coursprix;

    #[ORM\ManyToOne(targetEntity: Courscategory::class)]
    #[ORM\JoinColumn(name: "idCategory", referencedColumnName: "id")]
    private $idcategory;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoursname(): ?string
    {
        return $this->coursname;
    }

    public function setCoursname(string $coursname): static
    {
        $this->coursname = $coursname;

        return $this;
    }

    public function getCoursdescription(): ?string
    {
        return $this->coursdescription;
    }

    public function setCoursdescription(string $coursdescription): static
    {
        $this->coursdescription = $coursdescription;

        return $this;
    }

    public function getCoursimage(): ?string
    {
        return $this->coursimage;
    }

    public function setCoursimage(string $coursimage): static
    {
        $this->coursimage = $coursimage;

        return $this;
    }

    public function getCoursprix(): ?int
    {
        return $this->coursprix;
    }

    public function setCoursprix(int $coursprix): static
    {
        $this->coursprix = $coursprix;

        return $this;
    }

    public function getIdcategory(): ?Courscategory
    {
        return $this->idcategory;
    }

    public function setIdcategory(?Courscategory $idcategory): static
    {
        $this->idcategory = $idcategory;

        return $this;
    }


}
