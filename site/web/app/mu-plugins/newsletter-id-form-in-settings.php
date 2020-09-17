<?php

add_action('admin_init', function () {  
    add_settings_section(  
        'nl_form',
        'Inscription à la newsletter',
        __NAMESPACE__.'\\nl_form_callback',
        'general'
    );

    add_settings_field(
        'gf_newsletter_id',
        'Id du formulaire Gravity Form',
        __NAMESPACE__.'\\gf_id_callback',
        'general',
        'nl_form',
        array(
            'gf_newsletter_id' // Should match Option ID
        )  
    );
    register_setting('general','gf_newsletter_id', 'esc_attr');
}); 

function nl_form_callback() { // Section Callback
}


function gf_id_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input type="text" placeholder="Numéro de l\'id." id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}