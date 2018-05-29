<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LivraisonCollaborativeRepository")
 */
class LivraisonCollaborative
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $pseudo_useresponsable;

    /**
     * @ORM\Column(type="integer")
     */
    private $zip;

    /**
     * @ORM\Column(type="integer")
     */
    private $perimetre_activite;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $jour_livraison;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_livraison;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $pseudo_userlivre;

    public function getId()
    {
        return $this->id;
    }

    public function getPseudoUseresponsable(): ?string
    {
        return $this->pseudo_useresponsable;
    }

    public function setPseudoUseresponsable(string $pseudo_useresponsable): self
    {
        $this->pseudo_useresponsable = $pseudo_useresponsable;

        return $this;
    }

    public function getZip(): ?int
    {
        return $this->zip;
    }

    public function setZip(int $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    public function getPerimetreActivite(): ?int
    {
        return $this->perimetre_activite;
    }

    public function setPerimetreActivite(int $perimetre_activite): self
    {
        $this->perimetre_activite = $perimetre_activite;

        return $this;
    }

    public function getJourLivraison(): ?\DateTimeInterface
    {
        return $this->jour_livraison;
    }

    public function setJourLivraison(?\DateTimeInterface $jour_livraison): self
    {
        $this->jour_livraison = $jour_livraison;

        return $this;
    }

    public function getHeureLivraison(): ?\DateTimeInterface
    {
        return $this->heure_livraison;
    }

    public function setHeureLivraison(\DateTimeInterface $heure_livraison): self
    {
        $this->heure_livraison = $heure_livraison;

        return $this;
    }

    public function getPseudoUserlivre(): ?string
    {
        return $this->pseudo_userlivre;
    }

    public function setPseudoUserlivre(string $pseudo_userlivre): self
    {
        $this->pseudo_userlivre = $pseudo_userlivre;

        return $this;
    }
}
