<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$chronique = new FieldsBuilder('Chronique');
$chronique
    ->addDatePicker('single_post_album_release_date', ['label' => 'Date de sortie de l\'album','first_day' => 1])
    ->addText('single_post_album_title', ['label' => 'Nom de l\'album',])
    ->addText('single_post_advertising_sponsor_label', ['label' => 'Nom du label sponsor de l\'article']);

return $chronique;