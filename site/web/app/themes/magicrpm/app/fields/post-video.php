<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$single_post_video = new FieldsBuilder('Videos', ['title' => 'videos']);

$single_post_video
    ->setLocation('post_taxonomy', '==', 'category:videos');
  
$single_post_video
    ->addFields(get_field_partial('partials.single-post.video'));

return $single_post_video;