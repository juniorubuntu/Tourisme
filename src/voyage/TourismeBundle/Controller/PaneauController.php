<?php

namespace voyage\TourismeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use voyage\TourismeBundle\Entity\Affiche;
use voyage\TourismeBundle\Entity\Menu;
use voyage\TourismeBundle\Entity\Paneau;
use voyage\TourismeBundle\Form\PaneauType;
use voyage\TourismeBundle\Entity\Commentaire;
use voyage\TourismeBundle\Entity\Like;
use voyage\TourismeBundle\Entity\Image;

/**
 * Description of AccueilController
 *
 * @author atbr
 */
class PaneauController extends Controller {

    function indexAction($id) {

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

        $paneauToDetail = $this->getDoctrine()->getRepository('voyageTourismeBundle:Paneau')
                ->find($id);
        $PaneauAffiches = $this->getDoctrine()->getRepository('voyageTourismeBundle:Affiche')
                ->findBy(array('paneau' => $paneauToDetail));


        return $this->render('voyageTourismeBundle:Vues:detailPanel.html.twig', array(
                    'listeMenu' => $listeMenu,
                    'panels' => $listPanel,
                    'panelAffiche' => $affiches,
                    'paneau' => $paneauToDetail,
                    'paneauAffiche' => $PaneauAffiches));
    }

    function ajouterAction() {
        $panel = new Paneau();
        $form = $this->get('form.factory')->create(new PaneauType(), $panel);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($panel);
                $em->flush();
                return $this->redirect($this->generateUrl('panel_liste'));
            }
        }

        return $this->render('voyageTourismeBundle:Panel:ajouter.html.twig', array('form' => $form->createView()));
    }

    public function listeAction() {
        $listePaneau = $this->getDoctrine()->getRepository('voyageTourismeBundle:Paneau')
                ->findAll();
        return $this->render('voyageTourismeBundle:Panel:liste.html.twig', array('listePanel' => array_reverse($listePaneau)));
    }

}
