<?php
// slider 1
$wp_customize->add_section('slider', array(
    'title' => __('Slider', 'moashqar'),
    'description' => __('Add New Slider in Section 1.', 'moashqar'),
    'panel' => 'moashqar_theme_options',
));

$wp_customize->add_setting('hero_section_slider1_setting', array(
    'type' => 'theme_mod',
    'default' => __('', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'moashqar_hero_seection_slider1_photo', array(
    'label' => __('Image slider 1 ', 'moashqar'),
    'section' => 'slider',
    'settings' => 'hero_section_slider1_setting',
    'moashqar_hero_seection_slider1_photo',

)));

$wp_customize->add_setting('hero_section_setting_slider1_title', array(
    'type' => 'theme_mod',
    'default' => __('Grow your business with Vesperr', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_slider1_title_control', array(
    'label' => __('Title Slider 1', 'moashqar'),
    'section' => 'slider',
    'settings' => 'hero_section_setting_slider1_title',
));

$wp_customize->add_setting('hero_section_setting_slider1_description', array(
    'type' => 'theme_mod',
    'default' => __('We are team of talented designers making websites with Bootstrap', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_slider1_description_control', array(
    'label' => __('Description Silder 1', 'moashqar'),
    'section' => 'slider',
    'settings' => 'hero_section_setting_slider1_description',

));

//add section slider 2


$wp_customize->add_setting('hero_section_slider2_setting', array(
    'type' => 'theme_mod',
    'default' => __('', 'moashqar'),
    'transport' => 'refresh',



));
$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'moashqar_hero_seection_slider2_photo', array(
    'label' => __('Image slider 2 ', 'moashqar'),
    'section' => 'slider',
    'settings' => 'hero_section_slider2_setting',
    'moashqar_hero_seection_slider2_photo',


)));

$wp_customize->add_setting('hero_section_setting_slider2_title', array(
    'type' => 'theme_mod',
    'default' => __('Grow your business with Vesperr', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_silder2_title_control', array(
    'label' => __('Title Slider 2', 'moashqar'),
    'section' => 'slider',
    'settings' => 'hero_section_setting_slider2_title',
));

$wp_customize->add_setting('hero_section_setting_slider2_description', array(
    'type' => 'theme_mod',
    'default' => __('We are team of talented designers making websites with Bootstrap', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_slider2_description_control', array(
    'label' => __('Description Silder 2', 'moashqar'),
    'section' => 'slider',
    'settings' => 'hero_section_setting_slider2_description',
));
