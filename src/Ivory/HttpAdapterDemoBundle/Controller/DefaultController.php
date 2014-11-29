<?php

namespace Ivory\HttpAdapterDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $response = $this->get('ivory.http_adapter')->get('http://www.google.com/');

        return $this->render('IvoryHttpAdapterDemoBundle:Default:index.html.twig', array('response' => $response));
    }
}
