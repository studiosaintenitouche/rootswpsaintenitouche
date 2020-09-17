<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$stacked_selection = new FieldsBuilder('Sélection des dernières sorties');
$stacked_selection
    ->addPostObject('home_stacked_selection_list', [
        'label' => 'Sorties à la une',
        'post_type' => [0 => 'post'],
        'taxonomy' => [0 => 'category:sorties'],
        'multiple' => 1,
        'max' => 3,
    ]);

return $stacked_selection;