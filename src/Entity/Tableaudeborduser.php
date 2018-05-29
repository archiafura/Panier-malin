<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormInfosPersoRepository")
 */
class Tableaudeborduser
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
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenominfos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nominfos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomlivraison;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomlivraison;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomfacturation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomfacturation;





    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telephone;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $livraison;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $facturation;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cplivraison;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $villelivraison;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cpfacturation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $villefacturation;






    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailinfos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mdpinfos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $confirmmdpinfos;

    public function getId()
    {
        return $this->id;
    }

    public function getPrenomInfos(): ?string
    {
        return $this->prenominfos;
    }

    public function setPrenomInfos(string $prenominfos): self
    {
        $this->prenominfos = $prenominfos;

        return $this;
    }

    public function getNomInfos(): ?string
    {
        return $this->nominfos;
    }

    public function setNomInfos(string $nominfos): self
    {
        $this->nominfos = $nominfos;

        return $this;
    }


    public function getPrenomLivraison(): ?string
    {
        return $this->prenomlivraison;
    }

    public function setPrenomLivraison(string $prenomlivraison): self
    {
        $this->prenomlivraison = $prenomlivraison;

        return $this;
    }

    public function getNomLivraison(): ?string
    {
        return $this->nomlivraison;
    }

    public function setNomLivraison(string $nomlivraison): self
    {
        $this->nom = $nomlivraison;

        return $this;
    }



    public function getPrenomFacturation(): ?string
    {
        return $this->prenomfacturation;
    }

    public function setPrenomFacturation(string $prenomfacturation): self
    {
        $this->prenomfacturation = $prenomfacturation;

        return $this;
    }

    public function getNomFacturation(): ?string
    {
        return $this->nomfacturation;
    }

    public function setNomFacturation(string $nomfacturation): self
    {
        $this->nom = $nomfacturation;

        return $this;
    }




    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(?int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmailInfos(): ?string
    {
        return $this->emailinfos;
    }

    public function setEmailInfos(string $emailinfos): self
    {
        $this->emailinfos = $emailinfos;

        return $this;
    }

    public function getLivraison(): ?string
    {
        return $this->livraison;
    }

    public function setLivraison(string $livraison): self
    {
        $this->livraison = $livraison;

        return $this;
    }

    public function getCpLivraison(): ?string
    {
        return $this->cplivraison;
    }

    public function setCp(?string $cplivraison): self
    {
        $this->cplivraison = $cplivraison;

        return $this;
    }

    public function getVilleLivraison(): ?string
    {
        return $this->villelivraison;
    }

    public function setVilleLivraison(?string $villelivraison): self
    {
        $this->villelivraison = $villelivraison;

        return $this;
    }






    public function getCpFacturation(): ?string
    {
        return $this->cpfacturation;
    }

    public function setCpFacturation(?string $cpfacturation): self
    {
        $this->cpfacturation = $cpfacturation;

        return $this;
    }

    public function getVilleFacturation(): ?string
    {
        return $this->villefacturation;
    }

    public function setVilleFacturation(?string $villefacturation): self
    {
        $this->villefacturation = $villefacturation;

        return $this;
    }

    public function getFacturation(): ?string
    {
        return $this->facturation;
    }

    public function setFacturation(string $facturation): self
    {
        $this->facturation = $facturation;

        return $this;
    }

    public function getMdpInfos(): ?string
    {
        return $this->mdpinfos;
    }

    public function setMdpInfos(string $mdpinfos): self
    {
        $this->mdpinfos = $mdpinfos;

        return $this;
    }

    public function getConfirmmdpInfos(): ?string
    {
        return $this->confirmmdpinfos;
    }

    public function setConfirmmdpInfos(string $confirmmdpinfos): self
    {
        $this->confirmmdpinfos = $confirmmdpinfos;

        return $this;
    }
}
