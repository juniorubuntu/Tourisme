<?php

namespace voyage\TourismeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use voyage\TourismeBundle\Form\MenuType;
use voyage\TourismeBundle\Entity\Menu;

class MenuController extends Controller {

    public function ajouterAction() {
        $menu = new Menu();
        $form = $this->get('form.factory')->create(new MenuType(), $menu);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($menu);
                $em->flush();
                return $this->redirect($this->generateUrl('menu_liste'));
            }
        }

        return $this->render('voyageTourismeBundle:Menu:ajouter.html.twig', array('form' => $form->createView()));
    }

    public function listeAction() {
        $listeMenu = $this->getDoctrine()->getRepository('voyageTourismeBundle:Menu')
                ->findAll();
        return $this->render('voyageTourismeBundle:Menu:liste.html.twig', array('listeMenu' => array_reverse($listeMenu)));
    }

    public function detailAction($id) {
        
    }

    public function supprimerAction($id) {
        
    }

}
