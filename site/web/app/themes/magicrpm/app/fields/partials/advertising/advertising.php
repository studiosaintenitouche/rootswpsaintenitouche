<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$advertising_fields = new FieldsBuilder('Publicité');
$advertising_fields
    ->addImage('advertising_image_desktop', ['label' => 'Image','return_format' => 'url'])
    ->addImage('advertising_image_mobile', ['label' => 'Image','return_format' => 'url'])
    ->addUrl('advertising_url', ['label' => 'Lien URL'])
    ->addDatePicker('advertising_start_date', ['label' => 'Début de la période d\'affichage','first_day' => 1,])
    ->addDatePicker('advertising_end_date', ['label' => 'Fin de la période d\'affichage','first_day' => 1,]);

return $advertising_fields;