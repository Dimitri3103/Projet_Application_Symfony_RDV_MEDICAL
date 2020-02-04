<?php

namespace admin\personneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * rdv
 *
 * @ORM\Table(name="rdv")
 * @ORM\Entity(repositoryClass="admin\personneBundle\Repository\rdvRepository")
 */
class rdv
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
     * @ORM\Column(name="nom_pat", type="string", length=255)
     */
    private $nomPat;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_pat", type="string", length=255)
     */
    private $prenomPat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rdv", type="date")
     */
    private $dateRdv;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_pat", type="string", length=255)
     */
    private $telPat;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="medecin")
     */
    private $nomMed;


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
     * Set nomPat
     *
     * @param string $nomPat
     *
     * @return rdv
     */
    public function setNomPat($nomPat)
    {
        $this->nomPat = $nomPat;

        return $this;
    }

    /**
     * Get nomPat
     *
     * @return string
     */
    public function getNomPat()
    {
        return $this->nomPat;
    }

    /**
     * Set prenomPat
     *
     * @param string $prenomPat
     *
     * @return rdv
     */
    public function setPrenomPat($prenomPat)
    {
        $this->prenomPat = $prenomPat;

        return $this;
    }

    /**
     * Get prenomPat
     *
     * @return string
     */
    public function getPrenomPat()
    {
        return $this->prenomPat;
    }

    /**
     * Set dateRdv
     *
     * @param \DateTime $dateRdv
     *
     * @return rdv
     */
    public function setDateRdv($dateRdv)
    {
        $this->dateRdv = $dateRdv;

        return $this;
    }

    /**
     * Get dateRdv
     *
     * @return \DateTime
     */
    public function getDateRdv()
    {
        return $this->dateRdv;
    }

    /**
     * Set telPat
     *
     * @param string $telPat
     *
     * @return rdv
     */
    public function setTelPat($telPat)
    {
        $this->telPat = $telPat;

        return $this;
    }

    /**
     * Get telPat
     *
     * @return string
     */
    public function getTelPat()
    {
        return $this->telPat;
    }

    /**
     * Set nomMed
     *
     * @param string $nomMed
     *
     * @return rdv
     */
    public function setNomMed($nomMed)
    {
        $this->nomMed = $nomMed;

        return $this;
    }

    /**
     * Get nomMed
     *
     * @return string
     */
    public function getNomMed()
    {
        return $this->nomMed;
    }
}

