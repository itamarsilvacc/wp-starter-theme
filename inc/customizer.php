<?php
/**
 * Customizer options for the Customizer API
 *
 */
function odin_customize_register( $wp_customize ) {

	// Social Networks Section
	$wp_customize->add_section( 'odin_contact_social_networks_section' , array(
	    'title'      => 'Contatos e Redes Sociais',
	    'priority'   => 20,
	) );

  $wp_customize->add_setting( 'odin_contact_phone', array( 'default' => '', 'sanitize_callback' => '' ) );
    $wp_customize->add_control( 'odin_contact_phone', array(
                                    'label' => 'Telefone',
                                    'section' => 'odin_contact_social_networks_section',
                                    'settings' => 'odin_contact_phone',
                                    'type' => 'text',
                                    'description' => '' ) );

  $wp_customize->add_setting( 'odin_contact_email', array( 'default' => '', 'sanitize_callback' => '' ) );
    $wp_customize->add_control( 'odin_contact_email', array(
                                    'label' => 'Email',
                                    'section' => 'odin_contact_social_networks_section',
                                    'settings' => 'odin_contact_email',
                                    'type' => 'text',
                                    'description' => '' ) );

	$wp_customize->add_setting( 'odin_social_networks_facebook', array( 'default' => '', 'sanitize_callback' => 'odin_wp_sanitize_url' ) );
    $wp_customize->add_control( 'odin_social_networks_facebook', array(
                                    'label' => 'Link do Facebook',
                                    'section' => 'odin_contact_social_networks_section',
                                    'settings' => 'odin_social_networks_facebook',
                                    'type' => 'text',
                                    'description' => '' ) );

    $wp_customize->add_setting( 'odin_social_networks_instagram', array( 'default' => '', 'sanitize_callback' => 'odin_wp_sanitize_url' ) );
    $wp_customize->add_control( 'odin_social_networks_instagram', array(
                                    'label' => 'Link do Instagram',
                                    'section' => 'odin_contact_social_networks_section',
                                    'settings' => 'odin_social_networks_instagram',
                                    'type' => 'text',
                                    'description' => '' ) );

    $wp_customize->add_setting( 'odin_social_networks_youtube', array( 'default' => '', 'sanitize_callback' => 'odin_wp_sanitize_url' ) );
    $wp_customize->add_control( 'odin_social_networks_youtube', array(
                                    'label' => 'Link do Youtube',
                                    'section' => 'odin_contact_social_networks_section',
                                    'settings' => 'odin_social_networks_youtube',
                                    'type' => 'text',
                                    'description' => '' ) );
}
add_action( 'customize_register', 'odin_customize_register' );

function odin_wp_sanitize_url($input) {
    return esc_url_raw($input);
}
