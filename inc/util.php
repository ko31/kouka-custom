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

/**
 * Get term prefecture slugs.
 *
 * @return array
 */
function kouka_term_prefectures() {
	return [
		hokkaido,
		aomori,
		iwate,
		miyagi,
		akita,
		yamagata,
		fukushima,
		ibaraki,
		tochigi,
		gunma,
		saitama,
		chiba,
		tokyo,
		kanagawa,
		niigata,
		toyama,
		ishikawa,
		fukui,
		yamanashi,
		nagano,
		gifu,
		shizuoka,
		aichi,
		mie,
		shiga,
		kyoto,
		osaka,
		hyogo,
		nara,
		wakayama,
		tottori,
		shimane,
		okayama,
		hiroshima,
		yamaguchi,
		tokushima,
		kagawa,
		ehime,
		kochi,
		fukuoka,
		saga,
		nagasaki,
		kumamoto,
		oita,
		miyazaki,
		kagoshima,
		okinawa,
	];
}
