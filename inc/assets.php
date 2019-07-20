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

	// Search page
	if (is_page('search')){
		wp_enqueue_script( 'jquery-quicksearch', plugins_url( 'assets/js/jquery.quicksearch.min.js', dirname( __FILE__ ) ), [ 'jquery' ], '2.4.0' );
		wp_enqueue_script( 'quicksearch', plugins_url( 'assets/js/quicksearch.js', dirname( __FILE__ ) ), [ 'jquery-quicksearch' ], kouka_version() );
	}
} );
