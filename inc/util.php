<?php

/**
 *  Get term name.
 *
 * @param $post_id
 * @param $taxonomy
 *
 * @return string
 */
function kouka_term_name( $post_id, $taxonomy ) {
	$terms = get_the_terms( $post_id, $taxonomy );
	if ( $terms ) {
		return $terms[0]->name;
	}

	return '';
}
