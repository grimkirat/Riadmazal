<?php

namespace RiadMazal\RiadMazalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offres
 *
 * @ORM\Table(name="Offres")
 * @ORM\Entity(repositoryClass="RiadMazal\RiadMazalBundle\Repository\OffresRepository")
 */
class Offres
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
     * @ORM\Column(name="fr", type="text")
     */
    private $fr;

    /**
     * @var string
     *
     * @ORM\Column(name="en", type="text")
     */
    private $en;

    /**
     * @var string
     *
     * @ORM\Column(name="it", type="string", length=255)
     */
    private $it;

   


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
     * Set fr
     *
     * @param string $fr
     *
     * @return Offres
     */
    public function setFr($fr)
    {
        $this->fr = $fr;

        return $this;
    }

    /**
     * Get fr
     *
     * @return string
     */
    public function getFr()
    {
        return $this->fr;
    }

    /**
     * Set en
     *
     * @param string $en
     *
     * @return Offres
     */
    public function setEn($en)
    {
        $this->en = $en;

        return $this;
    }

    /**
     * Get en
     *
     * @return string
     */
    public function getEn()
    {
        return $this->en;
    }

    /**
     * Set it
     *
     * @param string $it
     *
     * @return Offres
     */
    public function setIt($it)
    {
        $this->it = $it;

        return $this;
    }

    /**
     * Get it
     *
     * @return string
     */
    public function getIt()
    {
        return $this->it;
    }
   


}
