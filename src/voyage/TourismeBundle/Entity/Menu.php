<?php

namespace voyage\TourismeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Menu
 *
 * @author atbr
 */

/**
 * @ORM\Entity;
 */
class Menu {

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
     * @ORM\ManyToOne(targetEntity="Menu")
     * @ORM\JoinColumn(onDelete="CASCADE", nullable=true)
     * @Assert\NotBlank()
     */
    private $menuPere;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $route;
    private $listFils;

    function getListFils() {
        return $this->listFils;
    }

    function setListFils($listFils) {
        $this->listFils = $listFils;
    }

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
     * @return Menu
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
     * Set route
     *
     * @param string $route
     * @return Menu
     */
    public function setRoute($route) {
        $this->route = $route;

        return $this;
    }

    /**
     * Get route
     *
     * @return string 
     */
    public function getRoute() {
        return $this->route;
    }

    /**
     * Set menuPere
     *
     * @param \voyage\TourismeBundle\Entity\Menu $menuPere
     * @return Menu
     */
    public function setMenuPere(\voyage\TourismeBundle\Entity\Menu $menuPere = null) {
        $this->menuPere = $menuPere;

        return $this;
    }

    /**
     * Get menuPere
     *
     * @return \voyage\TourismeBundle\Entity\Menu 
     */
    public function getMenuPere() {
        return $this->menuPere;
    }

}
