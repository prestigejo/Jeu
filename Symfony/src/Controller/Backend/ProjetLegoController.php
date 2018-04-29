<?php

namespace App\Controller\Backend;

use App\Configurator\ProjetConfigurator as Configurator;
use Idk\LegoBundle\Controller\LegoController;
use Idk\LegoBundle\Traits\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * The admin list controller for Jeu
 * @Route("/projet")
 */
class ProjetLegoController extends LegoController
{

    use Controller;
    const LEGO_CONFIGURATOR = Configurator::class;

    public function showJsonAction($component){
        $request = $component->getRequest();
        /* @var \App\Entity\Projet $entity */
        $entity = $component->getConfigurator()->find($request->get('id'));
        $projet = $entity->getData();
        return $this->render('App:Projet:_show_json.html.twig', ['entity' => $entity, 'projet' => $projet]);
    }

}