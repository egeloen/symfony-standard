<?php

namespace AppBundle\Form\Type;

use Ivory\GoogleMap\Event\Event;
use Ivory\GoogleMap\Place\AutocompleteComponentType;
use Ivory\GoogleMap\Place\AutocompleteType;
use Ivory\GoogleMapBundle\Form\Type\PlaceAutocompleteType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class DemoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $event = new Event($variable = 'autocomplete', 'place_changed', <<<EOF
function () {
    console.log("place_changes triggered!");
    
    var place = this.getPlace();
    console.log(place);
}
EOF
);

        $builder->add('location', PlaceAutocompleteType::class, [
            'components' => [AutocompleteComponentType::COUNTRY => 'fr'],
            'types'      => [AutocompleteType::GEOCODE],
            'label'      => 'Where do you live.',
            'attr'       => ['placeholder' => ''],
            'variable'   => $variable,
            'events'     => [$event],
        ]);
    }
}
