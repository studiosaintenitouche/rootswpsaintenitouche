<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$magazine = new FieldsBuilder('Magazine', ['title' => 'Magazine']);

$magazine
    ->setGroupConfig('hide_on_screen', ['the_content'])
    ->setLocation('post_type', '==', 'magazines');
  
$magazine
    ->addFields(get_field_partial('partials.magazine.shop-url'));

return $magazine;