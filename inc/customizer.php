<?php
/**
 * FuegoAustral Theme Customizer
 *
 * @package FuegoAustral
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function fuegoaustral_customize_register( $wp_customize ) {
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'custom_css' );

	$wp_customize->add_section( 'current_event', array(
		'title' => 'Evento actual',
	) );

	$wp_customize->add_setting ( 'fuegoaustral_current_event_title', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
		'sanitize_js_callback' => '',
	) );

	$wp_customize->add_setting ( 'fuegoaustral_current_event_date', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
		'sanitize_js_callback' => '',
	) );

	$wp_customize->add_setting ( 'fuegoaustral_current_event_description', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
		'sanitize_js_callback' => '',
	) );

	$wp_customize->add_setting ( 'fuegoaustral_current_event_image', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
		'sanitize_js_callback' => '',
	) );

	$wp_customize->add_control( 'fuegoaustral_current_event_title', array(
		'type' => 'text',
		'priority' => 10, // Within the section.
		'section' => 'current_event', // Required, core or custom.
		'label' => __( 'Título de la edición actual' ),
	) );

	$wp_customize->add_control( 'fuegoaustral_current_event_date', array(
		'type' => 'text',
		'priority' => 20, // Within the section.
		'section' => 'current_event', // Required, core or custom.
		'label' => 'Fecha de la edición actual',
	) );

	$wp_customize->add_control( 'fuegoaustral_current_event_description', array(
		'type' => 'textarea',
		'priority' => 20, // Within the section.
		'section' => 'current_event', // Required, core or custom.
		'label' => 'Descripción de la edición actual',
	) );

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'fuegoaustral_current_event_image', array(
		'label' => 'Imagen de la edición actual',
		'priority' => 30, // Within the section.
		'section' => 'current_event', // Required, core or custom.
		'flex_width' => true,
		'flex_height' => true
	) ) );

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'fuegoaustral_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'fuegoaustral_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'fuegoaustral_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function fuegoaustral_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function fuegoaustral_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function fuegoaustral_customize_preview_js() {
	wp_enqueue_script( 'fuegoaustral-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'fuegoaustral_customize_preview_js' );
