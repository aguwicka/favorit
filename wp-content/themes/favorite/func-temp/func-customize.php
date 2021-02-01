<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function true_customizer_init($wp_customize)
{

    $wp_customize->add_section(
        'example_section_one',
        array(
            'title' => 'Мои настройки',
            'priority' => 11,
        )
    );

    //email
    $wp_customize->add_setting(
        'email',
        array(
            'default' => 'info@iriy.by'
        )
    );

    $wp_customize->add_control(
        'email',
        array(
            'label' => 'Email',
            'section' => 'example_section_one',
            'type' => 'text',
        )
    );

    //address
    $wp_customize->add_setting(
        'location',
        array(
            'default' => 'ул. Куйбышева, 22'
        )
    );

    $wp_customize->add_control(
        'location',
        array(
            'label' => 'address',
            'section' => 'example_section_one',
            'type' => 'text',
        )
    );

    //phone
    $wp_customize->add_setting(
        'phone',
        array(
            'default' => '+375 29 666 66 66'
        )
    );

    $wp_customize->add_control(
        'phone',
        array(
            'label' => 'phone',
            'section' => 'example_section_one',
            'type' => 'text',
        )
    );

}


add_action('customize_register', 'true_customizer_init');