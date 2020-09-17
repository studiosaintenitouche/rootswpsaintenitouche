<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$posts_on_top = new FieldsBuilder('Articles à la une');
$posts_on_top
    ->addPostObject('home_posts_on_top_list', [
        'label' => 'Articles à la une',
        'post_type' => [0 => 'post'],
        'multiple' => 1,
        'max' => 10,
    ]);

return $posts_on_top;