<?php


//---------- Enqueue styles -----------//

/*
add_action( 'wp_enqueue_scripts', 'cblox_enqueue_styles' );
function cblox_enqueue_styles() {

	// Enqueue custom fonts
	wp_enqueue_style(
		'cblox-custom-fonts',
		'https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700',
		array(),
		null
	);

	// Enqueue Font Awesome
	wp_enqueue_style(
		'cblox-custom-icons',
		'//opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css',
		array(),
		null
	);

}
*/


//---------- Enqueue scripts -----------//

add_action( 'wp_enqueue_scripts', 'cblox_enqueue_scripts' );
function cblox_enqueue_scripts() {

	// Main script
	wp_enqueue_script(
		'cblox-scripts',
		get_stylesheet_directory_uri() . '/frontend/cblox-scripts.js',
		array( 'jquery' ),
		null,
		true
	);

}