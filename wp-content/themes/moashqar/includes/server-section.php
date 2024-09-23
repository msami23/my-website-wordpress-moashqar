<?php
$wp_customize->add_section('server', array(
    'title' => __('Server', 'moashqar'),
    'description' => __('Theme Options Section.', 'moashqar'),
    'panel' => 'moashqar_theme_options',

));

$wp_customize->add_setting('hero_section_server_setting', array(
    'type' => 'theme_mod',
    'default' => __('', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'moashqar_hero_seection_server_photo', array(
    'label' => __('Image Section 4 ', 'moashqar'),
    'section' => 'server',
    'settings' => 'hero_section_server_setting',
    'moashqar_hero_seection_server_photo',

)));

$wp_customize->add_setting('hero_section_setting_server_title', array(
    'type' => 'theme_mod',
    'default' => __('Grow your business with Vesperr', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_title_server_control', array(
    'label' => __('Title Server', 'moashqar'),
    'section' => 'server',
    'settings' => 'hero_section_setting_server_title',
));

$wp_customize->add_setting('hero_section_setting_server_description', array(
    'type' => 'theme_mod',
    'default' => __('We are team of talented designers making websites with Bootstrap', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_description_server_control', array(
    'label' => __(' Description Section 4', 'moashqar'),
    'section' => 'server',
    'settings' => 'hero_section_setting_server_description',
));

$wp_customize->add_setting('hero_section_setting_server_read_more', array(
    'type' => 'theme_mod',
    'default' => __('We are team of talented designers making websites with Bootstrap', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_read_more_server_control', array(
    'label' => __('URL Page Read MORE', 'moashqar'),
    'section' => 'server',
    'settings' => 'hero_section_setting_server_read_more',
));