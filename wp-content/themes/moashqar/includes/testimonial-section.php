
<?php

$wp_customize->add_section('testimonial', array(
    'title' => __('Testimonial', 'moashqar'),
    'description' => __('Theme Options Section.', 'moashqar'),
    'panel' => 'moashqar_theme_options',

));

$wp_customize->add_setting('hero_section_testimonial_1_setting', array(
    'type' => 'theme_mod',
    'default' => __('', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'moashqar_hero_seection_testimonial_1_photo', array(
    'label' => __('Image Testimonial-1 ', 'moashqar'),
    'section' => 'testimonial',
    'settings' => 'hero_section_testimonial_1_setting',
    'moashqar_hero_seection_testimonial_1_photo',

)));

$wp_customize->add_setting('hero_section_setting_testimonial_1_name', array(
    'type' => 'theme_mod',
    'default' => __('name', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_name_testimonial_1_control', array(
    'label' => __('Name testimonial-1', 'moashqar'),
    'section' => 'testimonial',
    'settings' => 'hero_section_setting_testimonial_1_name',
));
$wp_customize->add_setting('hero_section_setting_testimonial_1_job', array(
    'type' => 'theme_mod',
    'default' => __('Customer', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_job_testimonial_1_control', array(
    'label' => __('Job testimonial-1', 'moashqar'),
    'section' => 'testimonial',
    'settings' => 'hero_section_setting_testimonial_1_job',
));



$wp_customize->add_setting('hero_section_setting_testimonial_1_description', array(
    'type' => 'theme_mod',
    'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_description_testimonial_1_control', array(
    'label' => __(' Description testimonial-1', 'moashqar'),
    'section' => 'testimonial',
    'settings' => 'hero_section_setting_testimonial_1_description',
));

// testimonial 2



$wp_customize->add_setting('hero_section_testimonial_2_setting', array(
    'type' => 'theme_mod',
    'default' => __('', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'moashqar_hero_seection_testimonial_2_photo', array(
    'label' => __('Image Testimonial-2 ', 'moashqar'),
    'section' => 'testimonial',
    'settings' => 'hero_section_testimonial_2_setting',
    'moashqar_hero_seection_testimonial_2_photo',
)));

$wp_customize->add_setting('hero_section_setting_testimonial_2_name', array(
    'type' => 'theme_mod',
    'default' => __('name', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_name_testimonial_2_control', array(
    'label' => __('Name testimonial-2', 'moashqar'),
    'section' => 'testimonial',
    'settings' => 'hero_section_setting_testimonial_2_name',
));
$wp_customize->add_setting('hero_section_setting_testimonial_2_job', array(
    'type' => 'theme_mod',
    'default' => __('Customer', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_job_testimonial_2_control', array(
    'label' => __('Job testimonial-1', 'moashqar'),
    'section' => 'testimonial',
    'settings' => 'hero_section_setting_testimonial_2_job',
));

$wp_customize->add_setting('hero_section_setting_testimonial_2_description', array(
    'type' => 'theme_mod',
    'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia', 'moashqar'),
    'transport' => 'refresh',

));
$wp_customize->add_control('moashqar_hero_seection_description_testimonial_2_control', array(
    'label' => __(' Description testimonial-1', 'moashqar'),
    'section' => 'testimonial',
    'settings' => 'hero_section_setting_testimonial_2_description',
));
