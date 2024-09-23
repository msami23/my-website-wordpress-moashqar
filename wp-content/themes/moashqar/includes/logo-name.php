<?php
$wp_customize->add_section('logo_name', array(
    'title' => __('Logo Name', 'moashqar'),
    'description' => __('Theme Options Section.', 'moashqar'),
    'panel' => 'moashqar_theme_options',

));

$wp_customize->add_setting('hero_section_logo_name_setting', array(
    'type' => 'theme_mod',
    'default' => __('', 'moashqar'),
    'transport' => 'refresh',

));

$wp_customize->add_control('moashqar_hero_seection_logo_name_control', array(
    'label' => __('Section Title about', 'moashqar'),
    'section' => 'logo_name',
    'settings' => 'hero_section_logo_name_setting',
));
