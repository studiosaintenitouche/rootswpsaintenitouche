<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$home_example = new FieldsBuilder('Exemple');
$home_example
    ->addText('home_example_field', ['label' => 'Titre du manifeste']);

return $home_example;