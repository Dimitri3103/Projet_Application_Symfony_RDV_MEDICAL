<?php

namespace admin\personneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * medecin
 *
 * @ORM\Table(name="medecin")
 * @ORM\Entity(repositoryClass="admin\personneBundle\Repository\medecinRepository")
 */
class medecin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_medecin", type="string", length=255)
     */
    private $nomMedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_medecin", type="string", length=255)
     */
    private $prenomMedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_medecin", type="string", length=255)
     */
    private $adresseMedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_medecin", type="string", length=255)
     */
    private $telMedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_medecin", type="string", length=255)
     */
    private $photoMedecin;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomMedecin
     *
     * @param string $nomMedecin
     *
     * @return medecin
     */
    public function setNomMedecin($nomMedecin)
    {
        $this->nomMedecin = $nomMedecin;

        return $this;
    }

    /**
     * Get nomMedecin
     *
     * @return string
     */
    public function getNomMedecin()
    {
        return $this->nomMedecin;
    }

    /**
     * Set prenomMedecin
     *
     * @param string $prenomMedecin
     *
     * @return medecin
     */
    public function setPrenomMedecin($prenomMedecin)
    {
        $this->prenomMedecin = $prenomMedecin;

        return $this;
    }

    /**
     * Get prenomMedecin
     *
     * @return string
     */
    public function getPrenomMedecin()
    {
        return $this->prenomMedecin;
    }

    /**
     * Set adresseMedecin
     *
     * @param string $adresseMedecin
     *
     * @return medecin
     */
    public function setAdresseMedecin($adresseMedecin)
    {
        $this->adresseMedecin = $adresseMedecin;

        return $this;
    }

    /**
     * Get adresseMedecin
     *
     * @return string
     */
    public function getAdresseMedecin()
    {
        return $this->adresseMedecin;
    }

    /**
     * Set telMedecin
     *
     * @param string $telMedecin
     *
     * @return medecin
     */
    public function setTelMedecin($telMedecin)
    {
        $this->telMedecin = $telMedecin;

        return $this;
    }

    /**
     * Get telMedecin
     *
     * @return string
     */
    public function getTelMedecin()
    {
        return $this->telMedecin;
    }

    /**
     * Set photoMedecin
     *
     * @param string $photoMedecin
     *
     * @return medecin
     */
    public function setPhotoMedecin($photoMedecin)
    {
        $this->photoMedecin = $photoMedecin;

        return $this;
    }

    /**
     * Get photoMedecin
     *
     * @return string
     */
    public function getPhotoMedecin()
    {
        return $this->photoMedecin;
    }
}

