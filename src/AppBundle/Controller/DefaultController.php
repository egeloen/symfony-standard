<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\DemoType;
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
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/demo", name="demo")
     */
    public function demoAction()
    {
        // CKEditor demo form type
        return $this->render('AppBundle:Default:index.html.twig', array(
            'form' => $this->createForm(DemoType::class)->createView(),
        ));
    }
}
