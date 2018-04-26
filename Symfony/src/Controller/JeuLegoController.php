<?php

namespace App\Controller;

use App\Configurator\JeuConfigurator as Configurator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Idk\LegoBundle\Traits\Controller as TController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * The admin list controller for Jeu
 * @Route("/jeu")
 */
class JeuLegoController extends Controller
{

    use TController;

    const LEGO_CONFIGURATOR = Configurator::class;

}
