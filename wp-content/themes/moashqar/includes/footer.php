<?php

$wp_customize->add_section('footer', array(
    'title' => __('Footer', 'moashqar'),
    'description' => __('add section footer.', 'moashqar'),
    'panel' => 'moashqar_theme_options',

));


$wp_customize->add_setting('hero_section_setting_location', array(
    'type' => 'theme_mod',
    'default' => __('Location', 'moashqar'),
    'transport' => 'refresh',

));

$wp_customize->add_control('moashqar_hero_seection_location_control', array(
    'label' => __('Add Location', 'moashqar'),
    'section' => 'footer',
    'settings' => 'hero_section_setting_location',
));

$wp_customize->add_setting('hero_section_setting_phone', array(
    'type' => 'theme_mod',
    'default' => __('+1 123456789', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_phone_control', array(
    'label' => __('Add Number Phone', 'moashqar'),
    'section' => 'footer',
    'settings' => 'hero_section_setting_phone',
));

$wp_customize->add_setting('hero_section_setting_email', array(
    'type' => 'theme_mod',
    'default' => __('msami917@gmail.com', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_email_control', array(
    'label' => __('Add Email', 'moashqar'),
    'section' => 'footer',
    'settings' => 'hero_section_setting_email',
));

$wp_customize->add_setting('hero_section_setting_facebook', array(
    'type' => 'theme_mod',
    'default' => __('https://facebook.com', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_facebook_control', array(
    'label' => __('Add User Facebook', 'moashqar'),
    'section' => 'footer',
    'settings' => 'hero_section_setting_facebook',
));

$wp_customize->add_setting('hero_section_setting_twitter', array(
    'type' => 'theme_mod',
    'default' => __('https://twitter.com', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_twitter_control', array(
    'label' => __('Add User Twitter', 'moashqar'),
    'section' => 'footer',
    'settings' => 'hero_section_setting_twitter',
));


$wp_customize->add_setting('hero_section_setting_linkedin', array(
    'type' => 'theme_mod',
    'default' => __('https://linkedin.com', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_linkedin_control', array(
    'label' => __('Add User Linkedin', 'moashqar'),
    'section' => 'footer',
    'settings' => 'hero_section_setting_linkedin',
));


$wp_customize->add_setting('hero_section_setting_instagram', array(
    'type' => 'theme_mod',
    'default' => __('https://instagram.com', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_instagram_control', array(
    'label' => __('Add User Instagram', 'moashqar'),
    'section' => 'footer',
    'settings' => 'hero_section_setting_instagram',
));

$wp_customize->add_setting('hero_section_setting_info', array(
    'type' => 'theme_mod',
    'default' => __('necessary, making this the first true generator on the Internet.', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_info_control', array(
    'label' => __('Add Info', 'moashqar'),
    'section' => 'footer',
    'settings' => 'hero_section_setting_info',
));

$wp_customize->add_setting('hero_section_setting_copyright', array(
    'type' => 'theme_mod',
    'default' => __('Mo Ashqar Website.', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_copyright_control', array(
    'label' => __('Add Copyright', 'moashqar'),
    'section' => 'footer',
    'settings' => 'hero_section_setting_copyright',
));



