<?php

namespace RiadMazal\RiadMazalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="Reservation")
 * @ORM\Entity(repositoryClass="RiadMazal\RiadMazalBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="chambres", type="string", length=255)
     */
    private $chambres;

    /**
     * @var int
     *
     * @ORM\Column(name="nuits", type="integer")
     */
    private $nuits;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivee", type="string", length=255)
     */
    private $arrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="depart",  type="string", length=255)
     */
    private $depart;

    /**
     * @var int
     *
     * @ORM\Column(name="adulte", type="integer")
     */
    private $adulte;

    /**
     * @var int
     *
     * @ORM\Column(name="enfant", type="integer")
     */
    private $enfant;


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
     * @return Reservation
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
     * Set email
     *
     * @param string $email
     *
     * @return Reservation
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Reservation
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Reservation
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set chambres
     *
     * @param string $chambres
     *
     * @return Reservation
     */
    public function setChambres($chambres)
    {
        $this->chambres = $chambres;

        return $this;
    }

    /**
     * Get chambres
     *
     * @return string
     */
    public function getChambres()
    {
        return $this->chambres;
    }

    /**
     * Set nuits
     *
     * @param integer $nuits
     *
     * @return Reservation
     */
    public function setNuits($nuits)
    {
        $this->nuits = $nuits;

        return $this;
    }

    /**
     * Get nuits
     *
     * @return int
     */
    public function getNuits()
    {
        return $this->nuits;
    }

    /**
     * Set arrivee
     *
     * @param \DateTime $arrivee
     *
     * @return Reservation
     */
    public function setArrivee($arrivee)
    {
        $this->arrivee = $arrivee;

        return $this;
    }

    /**
     * Get arrivee
     *
     * @return \DateTime
     */
    public function getArrivee()
    {
        return $this->arrivee;
    }

    /**
     * Set depart
     *
     * @param \DateTime $depart
     *
     * @return Reservation
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;

        return $this;
    }

    /**
     * Get depart
     *
     * @return \DateTime
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * Set adulte
     *
     * @param integer $adulte
     *
     * @return Reservation
     */
    public function setAdulte($adulte)
    {
        $this->adulte = $adulte;

        return $this;
    }

    /**
     * Get adulte
     *
     * @return int
     */
    public function getAdulte()
    {
        return $this->adulte;
    }

    /**
     * Set enfant
     *
     * @param integer $enfant
     *
     * @return Reservation
     */
    public function setEnfant($enfant)
    {
        $this->enfant = $enfant;

        return $this;
    }

    /**
     * Get enfant
     *
     * @return int
     */
    public function getEnfant()
    {
        return $this->enfant;
    }
}

