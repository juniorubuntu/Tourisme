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
class Image {

    public function __toString() {
        return $this->getTitre();
    }

    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $titre;


    /**
     * @ORM\ManyToOne(targetEntity="Affiche")
     * @ORM\JoinColumn(onDelete="CASCADE", nullable=true)
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
     * Set titre
     *
     * @param string $titre
     * @return Image
     */
    public function setTitre($titre) {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set affiche
     *
     * @param \voyage\TourismeBundle\Entity\Affiche $affiche
     * @return Image
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