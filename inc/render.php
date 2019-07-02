<?php
/**
 * Customize content.
 */
add_filter( 'the_content', function ( $content ) {

	if ( is_singular( 'school' ) ) {
		require_once( 'template-parts/content-school.php' );
	}

	return $content;
} );
