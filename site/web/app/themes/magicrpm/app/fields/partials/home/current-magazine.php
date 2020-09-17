<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$current_magazine = new FieldsBuilder('Magasine à la une');
$current_magazine
    ->addImage('current_magazine_image', ['label' => 'Image de la couverture du magazine actuel','return_format' => 'url'])
    ->addText('current_magazine_title',  ['label' => 'Titre du magazine actuel'])
    ->addTextarea('current_magazine_content',  ['label' => 'Texte de présentation du magazine actuel', 'maxlength' => 80])
    ->addText('current_magazine_btn_order_txt',  ['label' => 'Texte du bouton de commande du magazine actuel'])
    ->addUrl('current_magazine_btn_order_url', ['label' => 'Lien URL'])
    ->addText('current_magazine_btn_subscribe_txt',  ['label' => 'Texte du bouton de d\'abonnement du magazine actuel'])
    ->addUrl('current_magazine_btn_subscribe_url', ['label' => 'Lien URL'])
    ->addColorPicker('current_magazine_bkg_color',  ['label' => 'Couleur du fond du bloc'])
    ->addColorPicker('current_magazine_typo_color',  ['label' => 'Couleur de la police du bloc']);

return $current_magazine;