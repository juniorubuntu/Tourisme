<?php

namespace voyage\TourismeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Affiche
 *
 * @author atbr
 */

/**
 * @ORM\Entity;
 */
class Affiche {

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
     * @ORM\Column(type="text", length=100000)
     * @Assert\NotBlank()
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Image")
     * @ORM\JoinColumn(onDelete="CASCADE", nullable=true)
     * @Assert\NotBlank()
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $route;

    /**
     * @ORM\ManyToOne(targetEntity="Paneau")
     * @ORM\JoinColumn(onDelete="CASCADE", nullable=true)
     * @Assert\NotBlank()
     */
    private $paneau;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Affiche
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Affiche
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set route
     *
     * @param string $route
     * @return Affiche
     */
    public function setRoute($route)
    {
        $this->route = $route;
    
        return $this;
    }

    /**
     * Get route
     *
     * @return string 
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Set image
     *
     * @param \voyage\TourismeBundle\Entity\Image $image
     * @return Affiche
     */
    public function setImage(\voyage\TourismeBundle\Entity\Image $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \voyage\TourismeBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set paneau
     *
     * @param \voyage\TourismeBundle\Entity\Paneau $paneau
     * @return Affiche
     */
    public function setPaneau(\voyage\TourismeBundle\Entity\Paneau $paneau = null)
    {
        $this->paneau = $paneau;
    
        return $this;
    }

    /**
     * Get paneau
     *
     * @return \voyage\TourismeBundle\Entity\Paneau 
     */
    public function getPaneau()
    {
        return $this->paneau;
    }
}