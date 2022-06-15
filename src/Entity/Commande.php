<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $numCommande;

    #[ORM\Column(type: 'datetime')]
    private $dateVente;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumCommande(): ?int
    {
        return $this->numCommande;
    }

    public function setNumCommande(int $numCommande): self
    {
        $this->numCommande = $numCommande;

        return $this;
    }

    public function getDateVente(): ?\DateTimeInterface
    {
        return $this->dateVente;
    }

    public function setDateVente(\DateTimeInterface $dateVente): self
    {
        $this->dateVente = $dateVente;

        return $this;
    }
}
