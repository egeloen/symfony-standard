<?php

namespace AppBundle\Controller;

use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
        $form = $this->createFormBuilder()
            ->add('description', CKEditorType::class)
            ->add('save', SubmitType::class)
            ->getForm();

        return $this->render('default/demo.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
