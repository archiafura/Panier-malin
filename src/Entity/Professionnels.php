<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProfessionnelsRepository")
 */
class Professionnels
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $entreprise;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $siret;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $zip;

    /**
     * @ORM\Column(type="array")
     */
    private $produits_proposes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo_pdts;

    /**
     * @ORM\Column(type="array")
     */
    private $utilite;

    public function getId()
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(string $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getProduitsProposes(): ?array
    {
        return $this->produits_proposes;
    }

    public function setProduitsProposes(array $produits_proposes): self
    {
        $this->produits_proposes = $produits_proposes;

        return $this;
    }

    public function getPhotoPdts(): ?string
    {
        return $this->photo_pdts;
    }

    public function setPhotoPdts(?string $photo_pdts): self
    {
        $this->photo_pdts = $photo_pdts;

        return $this;
    }

    public function getUtilite(): ?array
    {
        return $this->utilite;
    }

    public function setUtilite(array $utilite): self
    {
        $this->utilite = $utilite;

        return $this;
    }
}
