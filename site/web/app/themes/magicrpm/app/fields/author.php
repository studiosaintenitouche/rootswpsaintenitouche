<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$author = new FieldsBuilder('Twitter', ['title' => 'Twitter auteur']);

$author
    ->setGroupConfig('hide_on_screen', ['the_content'])
    ->setLocation('user_form', '==', 'edit');
  
$author
    ->addFields(get_field_partial('partials.author.twitter'));

return $author;