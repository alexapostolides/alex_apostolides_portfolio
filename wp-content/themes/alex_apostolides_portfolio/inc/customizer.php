<?php
/**
 * Alex Apostolides Portfolio Theme Customizer.
 *
 * @package Alex_Apostolides_Portfolio
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function alex_apostolides_portfolio_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section( 'Info');

	$wp_customize->remove_section('colors');
	$wp_customize->remove_section('title_tagline');
	$wp_customize->remove_section('header_image');
	$wp_customize->remove_section('widgets');




//INFO SECTION
    $wp_customize->add_section( 'info' , array(
        'title'    => __( 'Info', 'alex_apostolides_portfolio' ),
        'priority' => 10
    ) );   


    //DESCRIPTION
    $wp_customize->add_setting( 'description' , array(
        'default'   => 'Graphic design graduate at the Conservatory of Art & Design at Purchase College, SUNY. Currently based in New York. Looking for full time work.',
        'transport' => 'postMessage',
    ) );

	$wp_customize->add_control(
		'description', 
		array(
			'label'    => __( 'Description', 'alex_apostolides_portfolio' ),
			'section'  => 'info',
			'settings' => 'description',
			'type'     => 'textarea',
		)
	);


	//EMAIL
    $wp_customize->add_setting( 'email' , array(
        'default'   => 'hello@alexapostolides.com',
        'transport' => 'postMessage',
    ) );

	$wp_customize->add_control(
		'email', 
		array(
			'label'    => __( 'Email', 'alex_apostolides_portfolio' ),
			'section'  => 'info',
			'settings' => 'email',
			'type'     => 'text',
		)
	);


    //RESUME
    $wp_customize->add_setting( 'resume' , array(
        'default'   => '',
        'transport' => 'postMessage',
    ) );

	$wp_customize->add_control( 
		new WP_Customize_Upload_Control( 
		$wp_customize, 
		'resume', 
		array(
			'label'      => __( 'Resume', 'alex_apostolides_portfolio' ),
			'section'    => 'info',
			'settings'   => 'resume',
		) ) 
	);



//LOGOS
    $wp_customize->add_section( 'emailOverlay_logo' , array(
        'title'    => __( 'Email Overlay Logo', 'alex_apostolides_portfolio' ),
        'priority' => 20
    ) );   


    //DESCRIPTION
    $wp_customize->add_setting( 'logo' , array(
        'default'   => '',
        'transport' => 'postMessage',
    ) );

	$wp_customize->add_control( 
		new WP_Customize_Upload_Control( 
		$wp_customize, 
		'logo', 
		array(
			'label'      => __( 'Upload Logo', 'alex_apostolides_portfolio' ),
			'section'    => 'emailOverlay_logo',
			'settings'   => 'logo',
		) ) 
	);



}
add_action( 'customize_register', 'alex_apostolides_portfolio_customize_register' );






/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function alex_apostolides_portfolio_customize_preview_js() {
	wp_enqueue_script( 'alex_apostolides_portfolio_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'alex_apostolides_portfolio_customize_preview_js' );


