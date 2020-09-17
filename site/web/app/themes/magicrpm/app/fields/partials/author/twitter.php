<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$twitter = new FieldsBuilder('Twitter');
$twitter
    ->addText('twitter_nickname',  ['label' => 'Pseudo Twitter', 'placeholder' => '@']);

return $twitter;