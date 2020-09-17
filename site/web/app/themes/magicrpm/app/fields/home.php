<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$home = new FieldsBuilder('home', ['title' => 'Accueil']);

$home
    ->setGroupConfig('hide_on_screen', ['the_content'])
    ->setLocation('page_template', '==', 'views/template-home.blade.php');
  
$home
    ->addFields(get_field_partial('partials.home.posts-on-top'))
    ->addFields(get_field_partial('partials.home.current-magazine'))
    ->addFields(get_field_partial('partials.home.stacked-selection'))
    ->addFields(get_field_partial('partials.home.longform'));

return $home;