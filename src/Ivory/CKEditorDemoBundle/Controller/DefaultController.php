<?php

namespace Ivory\CKEditorDemoBundle\Controller;

use Ivory\CKEditorDemoBundle\Form\Type\DemoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IvoryCKEditorDemoBundle:Default:index.html.twig', array(
            'form' => $this->createForm(DemoType::class)->createView(),
        ));
    }
}
