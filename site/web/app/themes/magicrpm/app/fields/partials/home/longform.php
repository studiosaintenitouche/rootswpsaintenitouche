<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$longform = new FieldsBuilder('Long format à la une');
$longform
    ->addPostObject('home_longform', [
        'label' => 'Long format',
        'post_type' => [0 => 'post'],
        'taxonomy' => [0 => 'category:longs-formats']
    ]);

return $longform;