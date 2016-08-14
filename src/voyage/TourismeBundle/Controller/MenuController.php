<?php

namespace voyage\TourismeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use voyage\TourismeBundle\Form\MenuType;
use voyage\TourismeBundle\Entity\Menu;

class MenuController extends Controller {

    public function indexAction($id, $idSous) {
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

            foreach ($affiche as $aff) {
                //$aff->setDescription(substr($aff->getDescription(), 0, 150));
            }

            $listPanel[$i++]->setListAffiches($affiche);
        }

        $affiches = $this->getDoctrine()->getRepository('voyageTourismeBundle:Affiche')
                ->findBy(array('paneau' => NULL));

        $sousMenu = $this->getDoctrine()->getRepository('voyageTourismeBundle:Menu')
                ->find($idSous);


        return $this->render('voyageTourismeBundle:Vues:detailMenu.html.twig', array(
                    'listeMenu' => $listeMenu,
                    'panels' => $listPanel,
                    'panelAffiche' => $affiches,
                    'sousMenu' => $sousMenu,
                    'menuPere' => $sousMenu->getMenuPere()));
    }

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
