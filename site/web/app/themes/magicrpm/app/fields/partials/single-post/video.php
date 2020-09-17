<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$video = new FieldsBuilder('video');
$video
    ->addText('single_post_video_advertising_sponsor_label', ['label' => 'Nom du label sponsor de l\'article']);

return $video;