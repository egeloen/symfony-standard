<?php

namespace Ivory\OrderedFormDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class DemoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('last', 'text', array('position' => 'last'))
            ->add('fourth', 'text', array('position' => array('before' => 'last')))
            ->add('third', 'text')
            ->add('second', 'text', array('position' => array('after' => 'first')))
            ->add('first', 'text', array('position' => 'first'));
    }

    public function getName()
    {
        return 'demo';
    }
}
