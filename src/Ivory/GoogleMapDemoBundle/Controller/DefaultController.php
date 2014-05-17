<?php

namespace Ivory\GoogleMapDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $map = $this->get('ivory_google_map.map');

        return $this->render('IvoryGoogleMapDemoBundle:Default:index.html.twig', array('map' => $map));
    }
}
