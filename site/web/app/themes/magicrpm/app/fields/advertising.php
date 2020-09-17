<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$advertising = new FieldsBuilder('Publicité', ['title' => 'Accueil']);

$advertising
    ->setGroupConfig('hide_on_screen', ['the_content'])
    ->setLocation('post_type', '==', 'advertisings');
  
$advertising
    ->addFields(get_field_partial('partials.advertising.advertising'));

return $advertising;