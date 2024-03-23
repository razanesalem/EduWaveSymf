<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PublicationRepository;


#[ORM\Table(name: "publication")]
#[ORM\Entity(repositoryClass: PublicationRepository::class)]
class Publication
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(name: "id", type: "integer", nullable: false)]
    private $id;

    #[ORM\Column(name: "titre", type: "string", length: 255, nullable: false)]
    private $titre;

    #[ORM\Column(name: "contenu", type: "text", length: 65535, nullable: false)]
    private $contenu;

    #[ORM\Column(name: "date_publication", type: "datetime", nullable: false, options: ["default" => "current_timestamp()"])]
    private \DateTimeInterface $datePublication ;

    #[ORM\ManyToOne(targetEntity: "User")]
    #[ORM\JoinColumn(name: "utilisateur_id", referencedColumnName: "id")]
    private ?User $utilisateur;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->datePublication;
    }

    public function setDatePublication(\DateTimeInterface $datePublication): static
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    public function getUtilisateur(): ?User
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?User $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }


}
