<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InscriptionRepository")
 */
class Inscription
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mdp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     */

    private $zip;

    /**
     * @ORM\Column(type="string")
     */

    private $statut;

    /**
     * @ORM\Column(type="string")
     */

    private $interet;

    private $newsletter;
    private $perimetre_activite;



    public function getId()
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;
        return $this;

    }

    /**
     * @return mixed
     */
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param mixed $id
     */
    public function setId(integer $id): self
    {
        $this->id = $id;
    }

    /**
     * @param mixed $zip
     */
    public function setZip(integer $zip): self
    {
        $this->zip = $zip;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
    }

    /**
     * @return mixed
     */
    public function getInteret()
    {
        return $this->interet;
    }

    /**
     * @param mixed $interet
     */
    public function setInteret(string $interet): self
    {
        $this->interet = $interet;
    }

    /**
     * @return mixed
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * @param mixed $newsletter
     */
    public function setNewsletter(bool $newsletter)
    {
        $this->newsletter = $newsletter;
    }

    /**
     * @param mixed $perimetre_activite
     */
    public function setPerimetreActivite(integer $perimetre_activite): self
    {
        $this->perimetre_activite = $perimetre_activite;
    }

    /**
     * @return mixed
     */
    public function getPerimetreActivite()
    {
        return $this->perimetre_activite;
    }




}
