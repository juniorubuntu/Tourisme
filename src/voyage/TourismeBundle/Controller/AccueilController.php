<?php

namespace voyage\TourismeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AccueilController
 *
 * @author atbr
 */
class AccueilController extends Controller {

    function indexAction() {
        
        
        return $this->render('voyageTourismeBundle:Vues:accuel.html.twig');
    }

}
