<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$magazine_url = new FieldsBuilder('Magazine');
$magazine_url
    ->addUrl('magazine_shop_url', ['label' => 'Lien du magazine dans la boutique']);

return $magazine_url;