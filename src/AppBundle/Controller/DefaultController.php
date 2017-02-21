<?php

namespace AppBundle\Controller;

use Ivory\GoogleMap\Service\Geocoder\Request\GeocoderAddressRequest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }

    /**
     * @Route("/demo", name="demo")
     */
    public function demoAction(Request $request)
    {
        $geocoder = $this->get('ivory.google_map.geocoder');
        $response = $geocoder->geocode(new GeocoderAddressRequest('Paris, France'));

        var_dump($response);
        die;
    }
}
