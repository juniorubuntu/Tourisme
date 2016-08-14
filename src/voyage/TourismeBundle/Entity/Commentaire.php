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
class Commentaire {

    public function __toString() {
        return $this->contenu();
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
    private $auteur;

    /**
     * @ORM\Column(type="text", length=100000)
     * @Assert\NotBlank()
     */
    private $contenu;

    /**
     * @ORM\ManyToOne(targetEntity="Affiche")
     * @ORM\JoinColumn(onDelete="CASCADE")
     * @Assert\NotBlank()
     */
    private $affiche;


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
     * Set auteur
     *
     * @param string $auteur
     * @return Commentaire
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set affiche
     *
     * @param \voyage\TourismeBundle\Entity\Affiche $affiche
     * @return Commentaire
     */
    public function setAffiche(\voyage\TourismeBundle\Entity\Affiche $affiche = null)
    {
        $this->affiche = $affiche;
    
        return $this;
    }

    /**
     * Get affiche
     *
     * @return \voyage\TourismeBundle\Entity\Affiche 
     */
    public function getAffiche()
    {
        return $this->affiche;
    }
}