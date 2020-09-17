<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$advertising_options = new FieldsBuilder('Réglages publicité', ['title' => 'Accueil']);

$advertising_options
    ->setGroupConfig('hide_on_screen', ['the_content'])
    ->setLocation('options_page', '==', 'advertisings');
  
$advertising_options
    ->addFields(get_field_partial('partials.advertising-options.advertising'));

return $advertising_options;