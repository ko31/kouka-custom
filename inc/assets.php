<?php
/**
 * Initialize assets
 */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'kouka', plugins_url( 'assets/css/style.css', dirname( __FILE__ ) ), [
		'snow-monkey',
		'snow-monkey-blocks',
		'snow-monkey-snow-monkey-blocks'
	], kouka_version() );

	wp_enqueue_script( 'kouka', plugins_url( 'assets/js/script.js', dirname( __FILE__ ) ), [ 'jquery' ], kouka_version() );
} );
