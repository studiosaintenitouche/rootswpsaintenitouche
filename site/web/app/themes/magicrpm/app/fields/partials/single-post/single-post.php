<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$single_post = new FieldsBuilder('Article single');
$single_post
    ->addText('single_post_title_home', ['label' => 'Titre pour la home','first_day' => 1,])
    ->addImage('single_post_image_home', ['label' => 'Image pour la home','return_format' => 'url']);

return $single_post;