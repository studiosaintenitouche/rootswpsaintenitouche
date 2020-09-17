<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$advertising_options_fields = new FieldsBuilder('Publicité');
$advertising_options_fields
    ->addPostObject('advertising_cover', [
        'label' => 'Habillage',
        'post_type' => [0 => 'advertisings'],
        'taxonomy' => [0 => 'advertising_type:cover'],
        'multiple' => 0,
        'allow_null' => 1,
    ])
    ->addPostObject('advertising_placeholder_banner', [
        'label' => 'Publicité bannière par défaut',
        'post_type' => [0 => 'advertisings'],
        'taxonomy' => [0 => 'advertising_type:banner'],
        'multiple' => 0,
        'allow_null' => 1,
    ])
    ->addPostObject('advertising_placeholder_sidebar', [
        'label' => 'Publicité de barre latérale par défaut',
        'post_type' => [0 => 'advertisings'],
        'taxonomy' => [0 => 'advertising_type:sidebar'],
        'multiple' => 0,
        'allow_null' => 1,
    ]);

return $advertising_options_fields;