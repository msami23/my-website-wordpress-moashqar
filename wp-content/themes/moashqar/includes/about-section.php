<?php
$wp_customize->add_section('about_us', array(
    'title' => __('About US', 'moashqar'),
    'description' => __('Theme Options Section.', 'moashqar'),
    'panel' => 'moashqar_theme_options',

));

$wp_customize->add_setting('hero_section_about_setting', array(
    'type' => 'theme_mod',
    'default' => __('', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'moashqar_hero_seection_about_photo', array(
    'label' => __('Image About Us ', 'moashqar'),
    'section' => 'about_us',
    'settings' => 'hero_section_about_setting',
    'moashqar_hero_seection_about_photo',

)));

$wp_customize->add_setting('hero_section_setting_about_title', array(
    'type' => 'theme_mod',
    'default' => __('Grow your business with Vesperr', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_title_control', array(
    'label' => __('Section Title about', 'moashqar'),
    'section' => 'about_us',
    'settings' => 'hero_section_setting_about_title',
));

$wp_customize->add_setting('hero_section_setting_about_description', array(
    'type' => 'theme_mod',
    'default' => __('We are team of talented designers making websites with Bootstrap', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_description_control', array(
    'label' => __('Section Description About', 'moashqar'),
    'section' => 'about_us',
    'settings' => 'hero_section_setting_about_description',
));

$wp_customize->add_setting('hero_section_setting_about_read_more', array(
    'type' => 'theme_mod',
    'default' => __('We are team of talented designers making websites with Bootstrap', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_read_more_control', array(
    'label' => __('URL Page About Us', 'moashqar'),
    'section' => 'about_us',
    'settings' => 'hero_section_setting_about_read_more',
));
