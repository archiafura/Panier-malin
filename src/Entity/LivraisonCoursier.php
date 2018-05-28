<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LivraisonCoursierRepository")
 */
class LivraisonCoursier
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
    private $entreprise_nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_entreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commande_attente;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress_user;

    /**
     * @ORM\Column(type="integer")
     */
    private $tarif;

    /**
     * @ORM\Column(type="date")
     */
    private $jour_livraison;

    public function getId()
    {
        return $this->id;
    }

    public function getEntrepriseNom(): ?string
    {
        return $this->entreprise_nom;
    }

    public function setEntrepriseNom(string $entreprise_nom): self
    {
        $this->entreprise_nom = $entreprise_nom;

        return $this;
    }

    public function getAdresseEntreprise(): ?string
    {
        return $this->adresse_entreprise;
    }

    public function setAdresseEntreprise(string $adresse_entreprise): self
    {
        $this->adresse_entreprise = $adresse_entreprise;

        return $this;
    }

    public function getCommandeAttente(): ?string
    {
        return $this->commande_attente;
    }

    public function setCommandeAttente(string $commande_attente): self
    {
        $this->commande_attente = $commande_attente;

        return $this;
    }

    public function getNomUser(): ?string
    {
        return $this->nom_user;
    }

    public function setNomUser(string $nom_user): self
    {
        $this->nom_user = $nom_user;

        return $this;
    }

    public function getAdressUser(): ?string
    {
        return $this->adress_user;
    }

    public function setAdressUser(string $adress_user): self
    {
        $this->adress_user = $adress_user;

        return $this;
    }

    public function getTarif(): ?int
    {
        return $this->tarif;
    }

    public function setTarif(int $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getJourLivraison(): ?\DateTimeInterface
    {
        return $this->jour_livraison;
    }

    public function setJourLivraison(\DateTimeInterface $jour_livraison): self
    {
        $this->jour_livraison = $jour_livraison;

        return $this;
    }
}
