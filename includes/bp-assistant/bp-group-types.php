<?php

function aaa_custom_group_types() {

    //Nations group types
    bp_groups_register_group_type( 'nation', array(
        'labels' => array(
            'name' => 'Nations',
            'singular_name' => 'Nation'
        ),
 
        // New parameters as of BP 2.7.
        'has_directory' => 'nations',
        'show_in_create_screen' => false,
        'show_in_list' => true,
        'description' => 'Nations are the primary organization within Aerstrum, all players must join one on start.',
        'create_screen_checked' => true
    ) );

    //Regiments group types
    bp_groups_register_group_type('regiment', array (
        'labels' => array(
            'name' => 'Regiments',
            'singular_name' => 'Regiment'
        ),
 
        // New parameters as of BP 2.7.
        'has_directory' => 'regiments',
        'show_in_create_screen' => true,
        'show_in_list' => true,
        'description' => 'Regiments are essentially guilds',
        'create_screen_checked' => true 

    ) );
}
add_action( 'bp_groups_register_group_types', 'aaa_custom_group_types' );