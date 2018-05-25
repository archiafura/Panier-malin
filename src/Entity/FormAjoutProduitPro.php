<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormAjoutProduitProRepository")
 */
class FormAjoutProduitPro
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    private $typePdt;
    private $duree;
    private $horaire;
    private $conseil;
    private $image;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getConseil(): ?string
    {
        return $this->conseil;
    }

    /**
     * @param mixed $conseil
     */
    public function setConseil(string $conseil): void
    {
        $this->conseil = $conseil;
    }

    /**
     * @return mixed
     */
    public function getDuree(): ?string
    {
        return $this->duree;
    }

    /**
     * @param mixed $duree
     */
    public function setDuree(string $duree): void
    {
        $this->duree = $duree;
    }

    /**
     * @return mixed
     */
    public function getHoraire(): ?string
    {
        return $this->horaire;
    }

    /**
     * @param mixed $horaire
     */
    public function setHoraire(string $horaire): void
    {
        $this->horaire = $horaire;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $img
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getTypePdt(): ?string
    {
        return $this->typePdt;
    }

    /**
     * @param mixed $typePdt
     */
    public function setTypePdt(string $typePdt): void
    {
        $this->typePdt = $typePdt;
    }
}
