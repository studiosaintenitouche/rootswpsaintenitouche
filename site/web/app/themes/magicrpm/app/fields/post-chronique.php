<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$single_post_chronique = new FieldsBuilder('Article', ['title' => 'Album']);

$single_post_chronique
    ->setGroupConfig('hide_on_screen', ['the_content'])
    ->setLocation('post_taxonomy', '==', 'category:chroniques');
  
$single_post_chronique
    ->addFields(get_field_partial('partials.single-post.chronique'));

return $single_post_chronique;