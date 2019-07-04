<?php

/**
 * Customize meta data to be imported.
 */
add_filter( 'really_simple_csv_importer_save_meta', function ( $meta, $post, $is_update ) {

	// Movies
	$_movies = [];
	for ( $i = 1; $i <= 2; $i ++ ) {
		if ( ! empty( $meta[ 'movie' . $i ] ) ) {
			$_movies[] = [
				'url' => $meta[ 'movie' . $i ]
			];
		}
		unset( $meta[ 'movie' . $i ] );
	}
	if ( $_movies ) {
		$meta['_movies'] = $_movies;
	}

	// Sources
	$_sources = [];
	for ( $i = 1; $i <= 2; $i ++ ) {
		if ( ! empty( $meta[ 'source_title' . $i ] ) ) {
			$_sources[] = [
				'title' => $meta[ 'source_title' . $i ],
				'url'   => $meta[ 'source_url' . $i ]
			];
		}
		unset( $meta[ 'source_title' . $i ] );
		unset( $meta[ 'source_url' . $i ] );
	}
	if ( $_sources ) {
		$meta['_sources'] = $_sources;
	}

	// Sources
	$_notes = [];
	for ( $i = 1; $i <= 2; $i ++ ) {
		if ( ! empty( $meta[ 'note_description' . $i ] ) ) {
			$_notes[] = [
				'description' => $meta[ 'note_description' . $i ],
				'url'         => $meta[ 'note_url' . $i ]
			];
		}
		unset( $meta[ 'note_description' . $i ] );
		unset( $meta[ 'note_url' . $i ] );
	}
	if ( $_notes ) {
		$meta['_notes'] = $_notes;
	}

	// Links
	$_links = [];
	for ( $i = 1; $i <= 2; $i ++ ) {
		if ( ! empty( $meta[ 'link_title' . $i ] ) ) {
			$_links[] = [
				'title' => $meta[ 'link_title' . $i ],
				'url'   => $meta[ 'link_url' . $i ]
			];
		}
		unset( $meta[ 'link_title' . $i ] );
		unset( $meta[ 'link_url' . $i ] );
	}
	if ( $_links ) {
		$meta['_links'] = $_links;
	}

	return $meta;

}, 10, 3 );
