<?php
/**
 * Table Top Canada Theme Customizer
 *
 * @package Table_Top_Canada
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tbtcan_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'tbtcan_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'tbtcan_customize_partial_blogdescription',
			)
		);
	}


	$wp_customize->add_setting('tbtcan_logo_alt');

	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'tbtcan_logo_alt', array(
		'label' => 'Alternate Logo',
		'section' => 'title_tagline',
		'priority' => 9,
	) ) );

	$wp_customize->add_panel('tbtcan_social_media', array(
		'title' => esc_html( 'Social Media', 'tbtcan' ), 
	));

	$wp_customize->add_section('tbtcan_facebook', array(
		'title' => esc_html( 'Facebook', 'tbtcan' ), 
		'panel' => 'tbtcan_social_media'
	));

	$wp_customize->add_setting('tbtcan_facebook_title');

	$wp_customize->add_control( 'tbtcan_facebook_title', array(
		'label' => 'Title',
		'description' => 'Enter Link Title',
		'section' => 'tbtcan_facebook',

	));

	$wp_customize->add_setting('tbtcan_facebook_url');

	$wp_customize->add_control( 'tbtcan_facebook_url', array(
		'label' => 'URL',
		'description' => 'Enter Your Facebook Profile Link',
		'type' => 'url',
		'section' => 'tbtcan_facebook',

	));

	$wp_customize->add_setting('tbtcan_facebook_icon');

	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'tbtcan_facebook_icon', array(
		'label' => 'Icon',
		'section' => 'tbtcan_facebook',
	) ) );

	$wp_customize->add_section('tbtcan_twitter', array(
		'title' => esc_html( 'twitter', 'tbtcan' ), 
		'panel' => 'tbtcan_social_media'
	));

	$wp_customize->add_setting('tbtcan_twitter_title');

	$wp_customize->add_control( 'tbtcan_twitter_title', array(
		'label' => 'Title',
		'description' => 'Enter Link Title',
		'section' => 'tbtcan_twitter',

	));

	$wp_customize->add_setting('tbtcan_twitter_url');

	$wp_customize->add_control( 'tbtcan_twitter_url', array(
		'label' => 'URL',
		'description' => 'Enter Your twitter Profile Link',
		'type' => 'url',
		'section' => 'tbtcan_twitter',

	));

	$wp_customize->add_setting('tbtcan_twitter_icon');

	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'tbtcan_twitter_icon', array(
		'label' => 'Icon',
		'section' => 'tbtcan_twitter',
	) ) );
	$wp_customize->add_section('tbtcan_instagram', array(
		'title' => esc_html( 'instagram', 'tbtcan' ), 
		'panel' => 'tbtcan_social_media'
	));

	$wp_customize->add_setting('tbtcan_instagram_title');

	$wp_customize->add_control( 'tbtcan_instagram_title', array(
		'label' => 'Title',
		'description' => 'Enter Link Title',
		'section' => 'tbtcan_instagram',

	));

	$wp_customize->add_setting('tbtcan_instagram_url');

	$wp_customize->add_control( 'tbtcan_instagram_url', array(
		'label' => 'URL',
		'description' => 'Enter Your instagram Profile Link',
		'type' => 'url',
		'section' => 'tbtcan_instagram',

	));

	$wp_customize->add_setting('tbtcan_instagram_icon');

	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'tbtcan_instagram_icon', array(
		'label' => 'Icon',
		'section' => 'tbtcan_instagram',
	) ) );
}
add_action( 'customize_register', 'tbtcan_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function tbtcan_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function tbtcan_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tbtcan_customize_preview_js() {
	wp_enqueue_script( 'tbtcan-customizer', get_template_directory_uri() . '/assests/js/customizer.js', array( 'customize-preview' ), TBTCAN_VERSION, true );
}
add_action( 'customize_preview_init', 'tbtcan_customize_preview_js' );
