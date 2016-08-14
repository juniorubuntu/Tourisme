<?php

namespace voyage\TourismeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Image
 *
 * @author atbr
 */

/**
 * @ORM\Entity;
 */
class Like {

    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="Affiche")
     * @Assert\NotBlank()
     */
    private $affiche;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param integer $nombre
     * @return Like
     */
    public function setNombre($nombre) {
        $this->nombre += $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return integer 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set affiche
     *
     * @param \voyage\TourismeBundle\Entity\Affiche $affiche
     * @return Like
     */
    public function setAffiche(\voyage\TourismeBundle\Entity\Affiche $affiche = null) {
        $this->affiche = $affiche;

        return $this;
    }

    /**
     * Get affiche
     *
     * @return \voyage\TourismeBundle\Entity\Affiche 
     */
    public function getAffiche() {
        return $this->affiche;
    }

}