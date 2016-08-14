<?php

namespace voyage\TourismeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use voyage\TourismeBundle\Entity\Affiche;
use voyage\TourismeBundle\Entity\Menu;
use voyage\TourismeBundle\Entity\Paneau;
use voyage\TourismeBundle\Entity\Commentaire;
use voyage\TourismeBundle\Entity\Like;
use voyage\TourismeBundle\Entity\Image;

/**
 * Description of AccueilController
 *
 * @author atbr
 */
class AccueilController extends Controller {

    function indexAction() {

        $listeMenu = $this->getDoctrine()->getRepository('voyageTourismeBundle:Menu')
                ->findBy(array('menuPere' => NULL));

        $i = 0;
        foreach ($listeMenu as $pere) {
            $fils = $this->getDoctrine()->getRepository('voyageTourismeBundle:Menu')
                    ->findBy(array('menuPere' => $pere));
            $listeMenu[$i++]->setListFils($fils);
        }

        $listPanel = $this->getDoctrine()->getRepository('voyageTourismeBundle:Paneau')
                ->findAll();

        $i = 0;
        foreach ($listPanel as $panel) {
            $affiche = $this->getDoctrine()->getRepository('voyageTourismeBundle:Affiche')
                    ->findBy(array('paneau' => $panel));
            $listPanel[$i++]->setListAffiches($affiche);
        }

        $affiches = $this->getDoctrine()->getRepository('voyageTourismeBundle:Affiche')
                ->findBy(array('paneau' => NULL));

        return $this->render('voyageTourismeBundle:Vues:accueilTest.html.twig', array(
                    'listeMenu' => $listeMenu,
                    'panels' => $listPanel,
                    'affiches' => $affiches));
    }

}
