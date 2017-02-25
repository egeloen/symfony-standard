<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\PostType;
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
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function demoAction(Request $request)
    {
        $form = $this->createForm(new PostType());

        if ($form->handleRequest($request)->isValid()) {
            $manager = $this->getDoctrine()->getManager();

            $manager->persist($post = $form->getData());
            $manager->flush();

            var_dump($post);
            die;
        }

        return $this->render('default/demo.html.twig', ['form' => $form->createView()]);
    }
}
