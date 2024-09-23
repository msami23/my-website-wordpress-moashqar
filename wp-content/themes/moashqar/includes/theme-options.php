<?php

/**
 * theme options functions
 */

function moashqar_customize_register(WP_Customize_Manager $wp_customize) {
	$wp_customize->add_panel('moashqar_theme_options', array(
		'title' => __('Moashqar Theme Options', 'moashqar'),
		'description' => __('Customize your WordPress theme.', 'moashqar'),
		'priority' => 90,
    ));

    // logo Name
    require_once get_template_directory() . '/includes/logo-name.php';

    // Section Slider
    require_once get_template_directory() . '/includes/slider-section.php';



    //Section About Us
    require_once get_template_directory() . '/includes/about-section.php';



    //Server Section
    require_once get_template_directory() . '/includes/server-section.php';




    // Testimonial Section
    require_once get_template_directory() . '/includes/testimonial-section.php';

    // Footer
    require_once get_template_directory() . '/includes/footer.php';




    // contact us

//	$wp_customize->add_section('contact_section', array(
//		'title' => __('Contact Section', 'woolearn'),
//		'description' => __('Theme Options Contact Section.', 'woolearn'),
//		'panel' => 'woolearn_theme_options',
//
//
//	));
//	$wp_customize->add_setting('woolearn_contact_email', array(
//		'type' => 'theme_mod',
//		'default' => __('msami@gmail.com', 'woolearn'),
//		'transport' => 'refresh',
//
//	));
//	$wp_customize->add_control('woolearn_contact_email_control', array(
//		'label' => __('Email', 'woolearn'),
//		'settings' => 'woolearn_contact_email',
//		'section' => 'contact_section',
//
//	));
//	$wp_customize->add_setting('woolearn_contact_address', array(
//		'type' => 'theme_mod',
//		'default' => __('A108 Adam Street, New York, NY 535022', 'woolearn'),
//		'transport' => 'refresh',
//
//	));
//	$wp_customize->add_control('woolearn_contact_address_control', array(
//		'label' => __('Address', 'woolearn'),
//		'settings' => 'woolearn_contact_address',
//		'section' => 'contact_section',
//
//	));
//
//	$wp_customize->add_setting('woolearn_contact_call', array(
//		'type' => 'theme_mod',
//		'default' => __('+1 5589 55488 55', 'woolearn'),
//		'transport' => 'refresh',
//
//	));
//	$wp_customize->add_control('woolearn_contact_call_control', array(
//		'label' => __('Call', 'woolearn'),
//		'settings' => 'woolearn_contact_call',
//		'section' => 'contact_section',
//
//	));










}
add_action( 'customize_register', 'moashqar_customize_register' );
