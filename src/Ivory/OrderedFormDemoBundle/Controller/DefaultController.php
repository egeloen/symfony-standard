<?php

namespace Ivory\OrderedFormDemoBundle\Controller;

use Ivory\OrderedFormDemoBundle\Form\Type\DemoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $form = $this->createForm(new DemoType());

        return $this->render(
            'IvoryOrderedFormDemoBundle:Default:index.html.twig',
            array('form' => $form->createView())
        );
    }
}
