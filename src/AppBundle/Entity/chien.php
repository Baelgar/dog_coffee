<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * chien
 *
 * @ORM\Table(name="chien")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\chienRepository")
 */
class chien
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="race", type="string", length=255)
     */
    private $race;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", length=2)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="pelage", type="string", length=255)
     */
    private $pelage;

    /**
     * @var string
     *
     * @ORM\Column(name="caractere", type="string", length=255)
     */
    private $caractere;

    /**
     * @var int
     *
     * @ORM\Column(name="id_spa", type="integer")
     */
    private $idSpa;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_puce", type="string", length=50)
     */
    private $numeroPuce;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return chien
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set race
     *
     * @param string $race
     *
     * @return chien
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set age
     *
     * @param string $age
     *
     * @return chien
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set pelage
     *
     * @param string $pelage
     *
     * @return chien
     */
    public function setPelage($pelage)
    {
        $this->pelage = $pelage;

        return $this;
    }

    /**
     * Get pelage
     *
     * @return string
     */
    public function getPelage()
    {
        return $this->pelage;
    }

    /**
     * Set caractere
     *
     * @param string $caractere
     *
     * @return chien
     */
    public function setCaractere($caractere)
    {
        $this->caractere = $caractere;

        return $this;
    }

    /**
     * Get caractere
     *
     * @return string
     */
    public function getCaractere()
    {
        return $this->caractere;
    }

    /**
     * Set idSpa
     *
     * @param integer $idSpa
     *
     * @return chien
     */
    public function setIdSpa($idSpa)
    {
        $this->idSpa = $idSpa;

        return $this;
    }

    /**
     * Get idSpa
     *
     * @return int
     */
    public function getIdSpa()
    {
        return $this->idSpa;
    }

    /**
     * Set numeroPuce
     *
     * @param string $numeroPuce
     *
     * @return chien
     */
    public function setNumeroPuce($numeroPuce)
    {
        $this->numeroPuce = $numeroPuce;

        return $this;
    }

    /**
     * Get numeroPuce
     *
     * @return string
     */
    public function getNumeroPuce()
    {
        return $this->numeroPuce;
    }
}

