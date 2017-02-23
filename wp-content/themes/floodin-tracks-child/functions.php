<?php
function floodin_enqueue_styles() {
	wp_enqueue_style('tracks-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('grid-style', get_stylesheet_directory_uri() . '/assets/css/simplegrid.css', null, wp_get_theme() -> get('Version'));
	//wp_enqueue_style('floodin-static-style', get_stylesheet_directory_uri() . '/assets/css/static.css');
	wp_enqueue_style('modal-lity', get_stylesheet_directory_uri() . '/assets/css/lity.min.css');
}
add_action('wp_enqueue_scripts', 'floodin_enqueue_styles');

function floodin_enqueue_scripts () {
	wp_enqueue_script('floodin-scripts', get_stylesheet_directory_uri() . '/assets/js/app.js');
	wp_enqueue_script('floodin-scrollTo', get_stylesheet_directory_uri() . '/assets/js/scrollTo.js');
}
add_action('wp_enqueue_scripts', 'floodin_enqueue_scripts');

function floodin_add_google_fonts() {
	wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400|Space+Mono:400,700', false);
}
add_action('wp_enqueue_scripts', 'floodin_add_google_fonts');


$square_icons = array();


/*****  Logo Upload (For Mobile) *****/

add_action( 'customize_register', 'ct_tracks_add_small_logo' );

function ct_tracks_add_small_logo( $wp_customize ) {
	// setting
	$wp_customize->add_setting( 'small_logo_upload', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	// control
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize, 'small_logo_image', array(
			'label'    => __( 'Upload custom logo (on mobile).', 'tracks' ),
			'section'  => 'ct-upload',
			'settings' => 'small_logo_upload'
		)
	) );
}

/*****  Logo Upload (For Mobile) End *****/
?>