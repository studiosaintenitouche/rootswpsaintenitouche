<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$post = new FieldsBuilder('single_post', ['title' => 'Titre pour la home']);

$post
    ->setGroupConfig('hide_on_screen', ['the_content'])
    ->setLocation('post_type', '==', 'post');
  
$post
    ->addFields(get_field_partial('partials.single-post.single-post'));

return $post;