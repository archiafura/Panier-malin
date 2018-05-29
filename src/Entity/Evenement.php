<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EvenementRepository")
 */
class Evenement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_debut;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_debut;

    /**
     * @ORM\Column(type="date")
     */
    private $date_fin;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_fin;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $produits_proposes;

    /**
     * @ORM\Column(type="integer")
     */
    private $zip_de_vente;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo_pdts_proposes;

    public function getId()
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getHeureDebut(): ?\DateTimeInterface
    {
        return $this->heure_debut;
    }

    public function setHeureDebut(\DateTimeInterface $heure_debut): self
    {
        $this->heure_debut = $heure_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getHeureFin(): ?\DateTimeInterface
    {
        return $this->heure_fin;
    }

    public function setHeureFin(\DateTimeInterface $heure_fin): self
    {
        $this->heure_fin = $heure_fin;

        return $this;
    }

    public function getProduitsProposes(): ?array
    {
        return $this->produits_proposes;
    }

    public function setProduitsProposes(?array $produits_proposes): self
    {
        $this->produits_proposes = $produits_proposes;

        return $this;
    }

    public function getZipDeVente(): ?int
    {
        return $this->zip_de_vente;
    }

    public function setZipDeVente(int $zip_de_vente): self
    {
        $this->zip_de_vente = $zip_de_vente;

        return $this;
    }

    public function getPhotoPdtsProposes(): ?string
    {
        return $this->photo_pdts_proposes;
    }

    public function setPhotoPdtsProposes(string $photo_pdts_proposes): self
    {
        $this->photo_pdts_proposes = $photo_pdts_proposes;

        return $this;
    }
}
